<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Session;
use Str;
use Intervention\Image\ImageManagerStatic as Image;
class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Services.Index')
        ->with('services',Service::all());
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
        $rule=[
            'Service'=>'required|unique:services',
            'ServiceImage'=>'required'
        ];
        $this->validate($request,$rule);
        //intervention library to resize the image uploaded
        $image=$request->file('ServiceImage');
        $img = Image::make($image)->resize(800, 500);
        $randName=Str::random(10);
        $extension=$image->getClientOriginalExtension();
        $newName=$randName.".".$extension;
        $img->save('Services/'.$newName);
        Service::create([
            'Service'=>$request->Service,
            'ServiceImage'=>'Services/'.$newName
        ]);
        Session::flash('success','Service Successfully Added');
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
        $service=Service::find($id);
        return view('Services.Edit')->with('service',$service);
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
        $rule=[
            'Service'=>'required'
        ];
        $this->validate($request,$rule);
        $service=Service::find($id);
        if($request->file('ServiceImage')){
            //delete the previous image 
            @unlink($service->ServiceImage);
            //intervention library to resize the image uploaded
            $image=$request->file('ServiceImage');
            $img = Image::make($image)->resize(800, 500);
            $randName=Str::random(10);
            $extension=$image->getClientOriginalExtension();
            $newName=$randName.".".$extension;
            $img->save('Services/'.$newName);
            $service->ServiceImage='Services/'.$newName;
        }
        if($service){
            //update the details
            $service->Service=$request->Service;
            $service->save();
            Session::flash('success','Service Successfully Updated');
            return redirect(route('services.index'))
            ->with('services',Service::all());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service=Service::find($id);
        if($service){
            $service->delete();
            Session::flash('danger','Service successfully Removed');
            return back();
        }
        Session::flash('danger','Service Not Available, Already Deleted');
        return back();
    }
}
