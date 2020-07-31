<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level;
use Session;
use App\User;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Users.Index')->with('users',User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Users.Add')->with('roles',Level::all());
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
           'email'=>'required|unique:users|email',
           'password'=>'required|confirmed',
           'role'=>'required'
       ];
       $this->validate($request,$rules);
       User::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'role'=>$request->role,
           'password'=>bcrypt($request->password),
       ]);
       Session::flash('success','User Successfully Added');
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
    protected function roles(){
        return view('Users.Roles')->with('roles',Level::all());
    }

    public function rSave(Request $request){
        $this->validate($request,[
            'Level'=>'required|unique:levels'
        ]);
        Level::create([
            'Level'=>$request->Level
        ]);
        Session::flash('success','Level Successfully Added');
        return back();
    }
    protected function rdelete($id){
        $level=Level::find($id);
        if($level){
            $level->destroy($id);
            Session::flash('danger','Level Successfully Deleted');
            return back();
        }
    }
}
