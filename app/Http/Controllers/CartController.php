<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Cart,Product};
use Session;
use Auth;
use Str;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Session::get('GuestId'));
        if(Auth::check()){
            $username=Auth::user()->email;
        }else{
            $username=Session::get('GuestId');
        }
        $carts=Cart::where([
            ['clientId','=',$username],
            ['Status','=',0]
        ])->get();
        //get the cart totals
        // dd($carts);
        $sum=0;
        for($i=0;$i<count($carts);$i++){
            $sum=$sum+$carts[$i]->Total;
        }
        // dd($carts);
        return view('Cart')
        ->with('totals',$sum)
        ->with('carts',$carts);
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
        $product=Product::where('ProductId','=',$request->ProductId)->get()->first();
        if(is_null($product)){
            Session::flash('danger','Not Found');
            return back();
        }
        //set a temporary username for the person who want to add the items in the cart
        if(Session::get('GuestId') != null){
            $username=Session::get('GuestId');
        }else{
            $username=Str::random(15);
        }
        if(Auth::check()){
            $username=Auth::user()->email;
        }
        $totals=$product->SellingPrice* $request->Quantity;
        //check if the products exists in the cart
        $productCount=Cart::where([
            ['clientId','=',$username],
            ['ProductId','=',$request->ProductId]
        ])->get()->count();
        if($productCount>=1){
            Session::flash('error','Product Already Added in the Cart');
            return back();
        }else{
            Cart::create([
                'clientId'=>$username,
                'ProductId'=>$request->ProductId,
                'Qty'=>$request->Quantity,
                'Total'=>$totals,
            ]);
            session(['GuestId' => $username]);
            Session::flash('success','Product Successfully Added to Cart');
            return back();
        }
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
        $username=Session::get('GuestId');//this is the userId
        // dd($username);
        $product=Cart::where([
            ['clientId','=',$username],
            ['id','=',$id]
        ])->get()->first();
        //if the product is found 
        if(!$product){
            Session::flash('error','Unknown Error Occurred');
            return back();
        }
        //delete the product 
        $product->delete();
        Session::flash('error','Product Successfully Removed from Cart');
        return back();
    }
    protected function checkout(){
        if(Auth::check()){
            $username=Auth::user()->email;
        }else{
            $username=Session::get('GuestId');
        }
        $carts=Cart::where('clientId','=',$username)->get();
        //get the cart totals
        // dd($carts);
        $sum=0;
        for($i=0;$i<count($carts);$i++){
            $sum=$sum+$carts[$i]->Total;
        }
        // dd($carts);
        return view('CheckOut')
        ->with('totals',$sum)
        ->with('carts',$carts);
    }
}
