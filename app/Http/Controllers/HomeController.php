<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Message,Service,Contact};
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $messages=Message::count();
        $services=Service::count();
        $contacts=Contact::count();
        return view('home')
        ->with('contacts',$contacts)
        ->with('messages',$messages)
        ->with('services',$services);
    }
}
