<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\{Brand,Category,Product};
use Session;
use Str;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products=Product::paginate(20);
       return view('Products.Index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $brands=Brand::all();
        return view('Products.Create')
        ->with('brands',$brands)
        ->with('categories',$categories);
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
            'ProductName'=>'required|unique:products',
            'ProductText'=>'required',
            'ProductCategory'=>'required',
            'ProductBrand'=>'required',
            'SellingPrice'=>'required',
            'ProductDescription'=>'required',
            'ProductCount'=>'required',
            'ProductImage'=>'required|mimes:png,jpg,jpeg',
            'FrontView'=>'required|mimes:png,jpg,jpeg',
        ]; 
        $this->validate($request,$rules);
        //if valid, insert then to the database
        $pimage=$request->file('ProductImage');
        $fimage=$request->file('FrontView');
        $ProductImage = Image::make($pimage)->resize(300, 200);
        $randName=Str::random(10);
        $extension=$pimage->getClientOriginalExtension();
        $newName=$randName.".".$extension;
        $ProductImage->save('Products/'.$newName);
        //end Product Image
        $ProductImage = Image::make($fimage)->resize(300, 200);
        $randName=Str::random(10);
        $extension=$fimage->getClientOriginalExtension();
        $fnewName=$randName.".".$extension;
        $ProductImage->save('Products/'.$fnewName);
        //end front view image 
        Product::create([
            'ProductId'=>'GCG'.strtoupper(Str::random(10)),
            'ProductName'=>$request->ProductName,
            'ProductText'=>$request->ProductText,
            'ProductCategory'=>$request->ProductCategory,
            'ProductBrand'=>$request->ProductBrand,
            'SellingPrice'=>$request->SellingPrice,
            'Description'=>$request->ProductDescription,
            'ProductCount'=>$request->ProductCount,
            'ProductImage'=>'Products/'.$newName,
            'FrontView'=>'Products/'.$fnewName,
        ]);
        Session::flash('success','Product successfully Updated');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::find($id);
        return view('Products.Single')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        $categories=Category::all();
        $brands=Brand::all();
        return view('Products.Edit')
        ->with('brands',$brands)
        ->with('product',$product)
        ->with('categories',$categories);
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
