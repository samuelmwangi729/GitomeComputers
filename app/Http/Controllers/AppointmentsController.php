<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Session;
use App\Appointment;
use Str;
use App\User;
use Auth;
class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::all();
        return view('Appointments')->with('services',$services);
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
            'FirstName'=>'required',
            'LastName'=>'required',
            'Day'=>'required',
            'Month'=>'required',
            'Time'=>'required',
            'Topic'=>'required',
            'Message'=>'required',
            'Phone'=>'required',
            'Email'=>'required|email'
        ];
        $this->validate($request,$rules);
        $appointmentId=Str::random(6);
        $names=$request->FirstName.' '.$request->LastName;
        Appointment::create([
            'AppointmentId'=>$appointmentId,
            'Names'=>$names,
            'Email'=>$request->Email,
            'Phone'=>$request->Phone,
            'Day'=>$request->Day,
            'Month'=>$request->Month,
            'Time'=>$request->Time,
            'Topic'=>$request->Topic,
            'Message'=>$request->Message,
        ]);
        Session::flash('success','Appointment Successfully Booked. Your Appointment Id is '.$appointmentId.' . Kindly Use this Id or your Email Address to Check the Status of your Bookings.Thank You');
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
        return view('Appointment')->with('appointment',Appointment::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appointment=Appointment::find($id);
        if($appointment){
            $appointment->Status=1;
            $appointment->save();
            Session::flash('success','Appointment Successfully Approved');
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
    public function pupdate(Request $request)
    {
        $rules=[
            'password'=>'required|confirmed'
        ];
        $this->validate($request,$rules);
        $user=User::where('email','=',Auth::user()->email)->get()->first();
        $password=bcrypt($request->password);
        $user->password=$password;
        $user->save();
        Session::flash('success','Password Successfullly Updated');
        return back();
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
    protected function all(){
        $appointments=Appointment::paginate(15);
        return view('All')->with('appointments',$appointments);
    }
    protected function profile(){
        return view('Profile');
    }
}
