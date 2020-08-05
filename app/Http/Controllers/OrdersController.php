<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Str;
use App\{Cart,Order};
class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // if($this->orderId=='' || $this->userDetails=='' || $this->cart==''){
        //     return back();
        // }
        $total=Session::get('total');
        // $orderId=Session::get('OrderId');
        $userDetails=Session::get('userDetails');
        $Cart=Session::get('Cart');
        $orderId=Order::where([
            ['Email','=',$userDetails['Email']],
            ['Status','=',0]
        ])->get()->last()->OrderId;
        if(count($Cart)==0){
            Session::flash('error','Your Cart Is Empty');
            return redirect()->route('shop');
        }

        return view('Success')
        ->with('Total',$total)
        ->with('OrderId',$orderId)
        ->with('userDetails',$userDetails)
        ->with('Cart',$Cart)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            'FirstName'=>'required',
            'LastName'=>'required',
            'County'=>'required',
            'Town'=>'required',
            'PostalCode'=>'required',
            'Address'=>'required',
            'Phone'=>'required',
            'Email'=>'required|email',
        ];
        $this->validate($request,$rules);
        $username=Session::get('GuestId');
        $cart=Cart::where([
            ['clientId','=',$username],
            ['Status','=',0]
        ])->get();
        if(count($cart)==0){
            Session::flash('error','Your Cart is Empty');
            return back();
        }
        $newUsername=$request->Email;
        //forget the guestId after placing the order
        Session::forget('GuestId');
        $sum=0;
        //set the new username to the existing session id
        for($i=0;$i<count($cart);$i++){
            $sum= $sum+$cart[$i]->Total;
            $cart[$i]->clientId=$newUsername;
            $cart[$i]->Status=1;;
            $cart[$i]->save();
        }
        //store the totals temporarily
        session(['total'=>$sum]);
        //then insert everything into the Orders Table
        $orderId=Str::random(10);
        Order::create([
            'OrderId'=>$orderId,
            'FirstName'=>$request->FirstName,
            'LastName'=>$request->LastName,
            'Company'=>$request->Company,
            'County'=>$request->County,
            'Town'=>$request->Town,
            'PostalCode'=>$request->PostalCode,
            'Address'=>$request->Address,
            'Phone'=>$request->Phone,
            'Email'=>$request->Email,
        ]);
        //after creating the order, The client will have to register so that they can check their order status
        Session::flash('success','Order Successfully Placed. Kindly Register An Account with Us for you to be able to Track Your Order. Print the Invoice for future reference');
        session(['OrderId' => $orderId]);
        session(['userDetails' => $request->all()]);
        session(['Cart' => $cart]);
        return redirect()->route('orders.index')->with('OrderId',$orderId);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
