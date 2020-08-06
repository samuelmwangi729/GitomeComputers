<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\{Message,Service,Contact,Quote,Category,Product,Brand,Order,Cart,User,Appointment,Platform};
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
        if(Auth::user()->role=='Buyer'){
            //orders available
            $order=Order::where('Email','=',Auth::user()->email)->get()->last();
            $carts=Cart::where('clientId','=',Auth::user()->email)->get();
            $sum=0;
            for($i=0;$i<count($carts);$i++){
                $sum=$sum+$carts[$i]->Total;
            }
            return view('Buyer')
            ->with('total',$sum)
            ->with('order',$order)
            ->with('carts',$carts)
            ;
        }
        $icons=Platform::count();
        $appointments=Appointment::count();
        $users=User::count();
        $processed=Order::where('Status','=',1)->get();
        $processedOrders=count($processed);//processed orders
        $cart=Cart::where('Status','=','0')->get();
        $abadoned=count($cart);//abadoned shopping carts
        $orders=Order::count();
        $categories=Category::count();
        $brands=Brand::count();
        $products=Product::count();
        $messages=Message::count();
        $services=Service::count();
        $contacts=Contact::count();
        $quotes=Quote::count();
        return view('home')
        ->with('appointments',$appointments)
        ->with('processedOrders',$processedOrders)
        ->with('users',$users)
        ->with('abadoned',$abadoned)
        ->with('orders',$orders)
        ->with('brands',$brands)
        ->with('products',$products)
        ->with('categories',$categories)
        ->with('quotes',$quotes)
        ->with('contacts',$contacts)
        ->with('messages',$messages)
        ->with('services',$services)
        ->with('icons',$icons);
    }
}
