<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Platform;
use Session;
class PlatformsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platforms=Platform::all();
        return view('Platforms.Index')->with('platforms',$platforms);
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
            'Platform'=>'required|unique:platforms',
            'Link'=>'required'
        ];
        $this->validate($request,$rules);
        $platform=Platform::create($request->all());
        Session::flash('success','Platform Successfully Added');
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
        $platforms=Platform::all();
        $platform=Platform::findOrFail($id);
        return view('Platforms.Edit')
        ->with('platform',$platform)
        ->with('platforms',$platforms);
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
            'Platform'=>'required|unique:platforms',
            'Link'=>'required'
        ];
        $this->validate($request,$rules);
        $platform=Platform::findOrFail($id);
        if($platform){
            $platform->Platform=$request->Platform;
            $platform->Link=$request->Link;
            $platform->save();
            Session::flash('info','Platform Successfully Updated');
            return redirect()->route('platforms.index');
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
        $platform=Platform::findOrFail($id);
        if($platform){
            $platform->delete();
            Session::flash('error','Platform Successfully Deleted');
            return back();
        }
    }
}
