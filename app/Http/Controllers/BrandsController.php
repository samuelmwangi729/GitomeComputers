<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Str;
use Session;
use App\Brand;
use Intervention\Image\ImageManagerStatic as Image;
class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=Brand::paginate(10);
        return view('Brands.Index')->with('brands',$brands);
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
            'BrandImage'=>'required|mimes:png,jpg,jpeg',
            'BrandName'=>'required|unique:brands'
        ];
        $this->validate($request,$rules);
        //if the image exists, then get the intervention library and resize the image 
        $image=$request->file('BrandImage');
        $img = Image::make($image)->resize(300, 200);
        $randName=Str::random(10);
        $extension=$image->getClientOriginalExtension();
        $newName=$randName.".".$extension;
        $img->save('Brands/'.$newName);
        //then save the  brandName into the database 
        Brand::create([
            'BrandImage'=>'Brands/'.$newName,
            'BrandName'=>$request->BrandName
        ]);
        Session::flash('success','Brand Successfully Created');
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
        $brand=Brand::find($id);
        $brands=Brand::paginate(10);
        return view('Brands.Edit')
        ->with('brand',$brand)
        ->with('brands',$brands);
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
        $rules=[
            'BrandImage'=>'required|mimes:png,jpg,jpeg',
            'BrandName'=>'required'
        ];
        $this->validate($request,$rules);
        $brand=Brand::find($id);
        $oldImage=$brand->BrandImage;
        @unlink($oldImage);
        //then save the image  into the server 
        $image=$request->file('BrandImage');
        $img = Image::make($image)->resize(300, 200);
        $randName=Str::random(10);
        $extension=$image->getClientOriginalExtension();
        $newName=$randName.".".$extension;
        $img->save('Brands/'.$newName);
        $brand->BrandName=$request->BrandName;
        $brand->BrandImage='Brands/'.$newName;
        $brand->save();
        Session::flash('success','Brand Successfully Updated');
        return redirect()->route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand=Brand::find($id);
        if($brand){
            $brand->delete();
            @unlink($brand->BrandImage);
            Session::flash('danger','Brand Successfully Deleted');
            return back();
        }
    }
}
