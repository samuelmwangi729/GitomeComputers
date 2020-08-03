<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Message,Service,Contact,Quote,Category,Product,Brand};
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
        $categories=Category::count();
        $brands=Brand::count();
        $products=Product::count();
        $messages=Message::count();
        $services=Service::count();
        $contacts=Contact::count();
        $quotes=Quote::count();
        return view('home')
        ->with('brands',$brands)
        ->with('products',$products)
        ->with('categories',$categories)
        ->with('quotes',$quotes)
        ->with('contacts',$contacts)
        ->with('messages',$messages)
        ->with('services',$services);
    }
}
