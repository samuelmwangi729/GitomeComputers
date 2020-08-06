<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Slider;
use Session;
use App\Service;
use Str;
class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Shop.Slider');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sliders=Slider::all();
        return view('Shop.Index')->with('sliders',$sliders);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules=[
            'SliderImage'=>'required',
            'Headline'=>'required',
            'Text'=>'required',
            'LinkText'=>'required',
            'Link'=>'required'
        ];
        $this->validate($request,$rules);
        //first get the image and resize it 
        $image=$request->file('SliderImage');
        $ProductImage = Image::make($image)->resize(1280, 720);
        $randName=Str::random(10);
        $extension=$image->getClientOriginalExtension();
        $newName=$randName.".".$extension;
        $ProductImage->save('Slider/'.$newName);
        //then insert the rest to the database 
        Slider::create([
            'Image'=>'Slider/'.$newName,
            'Headline'=>$request->Headline,
            'Text'=>$request->Text,
            'LinkText'=>$request->LinkText,
            'Link'=>$request->Link,
        ]);
        Session::flash('success','Slider Successfully Added');
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
        $slider=Slider::find($id);
        $services=Service::all();
        return view('Shop.Single')
        ->with('services',$services)
        ->with('slider',$slider);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider=Slider::find($id);
        return view('Shop.Edit')->with('slider',$slider);
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
            'Headline'=>'required',
            'Text'=>'required',
            'LinkText'=>'required',
            'Link'=>'required'
        ];
        $this->validate($request,$rules);
        $slider=Slider::find($id);
        //first get the image and resize it 
        if($request->file('SliderImage')){
            //Delete the previous image file and save ths one
            @unlink($slider->Image);//image deleted 
            $image=$request->file('SliderImage');
            $ProductImage = Image::make($image)->resize(1280, 720);
            $randName=Str::random(10);
            $extension=$image->getClientOriginalExtension();
            $newName=$randName.".".$extension;
            $ProductImage->save('Slider/'.$newName);
            $slider->Image='Slider/'.$newName;
        }
        $slider->Headline=$request->Headline;
        $slider->Text=$request->Text;
        $slider->LinkText=$request->LinkText;
        $slider->Link=$request->Link;
        $slider->save();
        Session::flash('success','Successfully Updated the Slider');
        return redirect()->route('shops.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider=Slider::find($id);
        if($slider){
            @unlink($slider->Image);//this deletes the image from the server
            $slider->delete();
            Session::flash('error','Slider Successfully Deleted');
            return back();
        }
    }
}
