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
        //
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
        $newUsername=$request->Email;
        //set the new username to the existing session id
        for($i=0;$i<count($cart);$i++){
            $cart[$i]->clientId=$newUsername;
            $cart[$i]->Status=1;;
            $cart[$i]->save();
        }
        //then insert everything into the Orders Table
        Order::create([
            'OrderId'=>Str::random(10),
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
        Session::flash('success','Order Successfully Placed. Kindly Register An Account with Us for you to be able to Track Your Order and also Print Your Invoice');
        return redirect()->route('shop');
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
