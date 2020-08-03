<?php

namespace App\Http\Controllers;
use App\{Message,Quote};
use App\User;
use Str;
use Auth;
use Session;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myMessages=Message::where('To','=','Administrator')->get();
        $last=Message::where('To','=','Administrator')->get()->last();
        // dd($myMessages);
        return view('Messages.Index')
        ->with('last',$last)
        ->with('messages',$myMessages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::where('role','!=','Buyer')->get();
        return view('Messages.Create')->with('users',$users);
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
            'subject'=>'required',
            'role'=>'required',
            'message'=>'required'
        ];
        $this->validate($request,$rules);
        $chatId=Str::random(8);
        $message=Message::create([
            'ChatId'=>$chatId,
            'From'=>Auth::user()->email,
            'Subject'=>$request->subject,
            'Slug'=>sha1($chatId),
            'To'=>$request->role,
            'Message'=>$request->message,
        ]);
        Session::flash('success','Message Successfully Sent to '.$request->role);
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
       $last=Message::find($id);
    //    dd($last);
       $myMessages=Message::where('To','=','Administrator')->get();
       // dd($myMessages);
       return view('Messages.Index')
       ->with('last',$last)
       ->with('messages',$myMessages);
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
        $message=Message::where('Slug','=',$id)->get()->last();
        if($message){
            $message->delete();
            Session::flash('error','Message Successfully Deleted');
            $myMessages=Message::where('To','=','Administrator')->get();
            $last=Message::where('To','=','Administrator')->get()->last();
            // dd($myMessages);
            return view('Messages.Index')
            ->with('last',$last)
            ->with('messages',$myMessages);
        }
    }
}
