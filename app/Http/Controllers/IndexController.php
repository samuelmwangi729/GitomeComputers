<?php

namespace App\Http\Controllers;
use App\{Contact,Quote,Slider,Product,Category,Brand};
use Session;
use App\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $min=Service::orderBy('id','asc')->get()->first();
        $services=Service::all();
        return view('Services')
        ->with('min',$min)
        ->with('services',$services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $contacts=Contact::all();
        return view('contact')->with('contacts',$contacts);
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
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required'
        ];
        $this->validate($request,$rules);
        //then save to the database
        $data=[
            'Names'=>$request->name,
            'Email'=>$request->email,
            'Phone'=>$request->phone,
            'Message'=>$request->message,
        ];
        $quote=Quote::create($data);
        Session::flash('success','Quote Successfully received. We will get Back to you via the Phone '. $data['Phone']. ' Or by the email '. $data['Email']);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $slug=request()->slug;
        $services=Service::all();
        $product=Product::where('ProductSlug','=',$slug)->get()->first();
        if($product){
            return view('single')
            ->with('services',$services)
            ->with('product',$product);
        }else{
            return back();
        }
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
    protected function shop(){
        //load the sliders
        $sliders=Slider::all()->skip(1);
        $active=Slider::find(1);
        //load products brands
        $brands=Brand::all();
        //load the products 
        $products=Product::all();
        //load the products Categories
        $categories=Category::all();
        return view('shop')
        ->with('products',$products)
        ->with('active',$active)
        ->with('sliders',$sliders)
        ->with('brands',$brands)
        ->with('categories',$categories)
        ;
    }
}
