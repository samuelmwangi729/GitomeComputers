<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Session;
class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Contacts.Index')->with('contacts',Contact::all());
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
            'Type'=>'required',
            'Address'=>'required'
        ];
        $this->validate($request,$rules);
        //if the data is valid, insert then into the database 
        $data=[
            'Type'=>$request->Type,
            'Address'=>$request->Address,
        ];
        Contact::create($data);
        Session::flash('success','Contacts Successfully Recorded');
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
        $contact=Contact::find($id);
        if($contact){
            return view('Contacts.Edit')->with('contact',$contact);
        }
        else{
            Session::flash('danger','Unavailable');
            return back();
        }
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
            'Type'=>'required',
            'Address'=>'required'
        ];
        $this->validate($request,$rules);
        //then create the array
        $data=[
            'Type'=>$request->Type,
            'Address'=>$request->Address
        ];
        //update now
        $contact=Contact::find($id);
        $contact->Type=$request->Type;
        $contact->Address=$request->Address;
        $contact->save();
        Session::flash('success','Successfully Saved');
        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact=Contact::find($id);
        if($contact){
            $contact->delete();
            Session::flash('danger','Contact Successfully Deleted');
            return back();
        }
    }
}
