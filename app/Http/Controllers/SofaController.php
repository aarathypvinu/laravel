<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sofa;
use App\Models\Chair;
use App\Models\Table;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;
class SofaController extends Controller
{
    function index()
    {
        $data= Sofa::all();
        
        return view('home',['sofas'=>$data]);
    }
    function sofadetail($id)
    {
         $data= Sofa::find($id);
         return view('sofadetail',['home'=>$data]);
        
    }
    function sofadropview($id)
    {
         $data= Sofa::find($id);
         return view('sofadropview',['sofas'=>$data]);
        
    }

    function addToCart(Request $req)
    {
        if($req->session()->has('LoggedUser'))
        {
           $cart= new Cart;
           $cart->user_id=$req->session()->get('id',session('LoggedUser'));
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('/home');
        }
        else
        {
            return redirect('/');
        }
    }

    static function cartItem()
    {
     $userId=Session::get('id',session('LoggedUser'));
     return Cart::where('user_id',$userId)->count();
    }

    function cartList()
    {
        
        $userId=Session::get('id',session('LoggedUser'));
        $sofas= DB::table('cart')
        ->join('sofas','cart.product_id','=','sofas.id')
        ->where('cart.user_id',$userId)
        ->select('sofas.*','cart.id as cart_id')
        ->get();

        

        $tables= DB::table('cart')
        ->join('tables','cart.product_id','=','tables.id')
        ->where('cart.user_id',$userId)
        ->select('tables.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['sofas'=>$sofas],['tables'=>$tables]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow()
    {
        $userId=Session::get('id',session('LoggedUser'));
         $stotal= $sofas= DB::table('cart')
         ->join('sofas','cart.product_id','=','sofas.id')
        ->where('cart.user_id',$userId)
        ->sum('sofas.Price');

        $ttotal= $tables= DB::table('cart')
        ->join('tables','cart.product_id','=','tables.id')
        ->where('cart.user_id',$userId)
        ->sum('tables.Price');

        $ctotal= $chairs= DB::table('cart')
        ->join('chairs','cart.product_id','=','chairs.id')
        ->where('cart.user_id',$userId)
        ->sum('chairs.Price');

         return view('ordernow',['total'=>$stotal+$ttotal+$ctotal]);
    }

    function orderPlace(Request $req)
    {
        $userId=Session::get('id',session('LoggedUser'));
        $allCart= Cart::where('user_id',$userId)->get();
         foreach($allCart as $cart)
         {
             $order= new Order;
             $order->product_id=$cart['product_id'];
             $order->user_id=$cart['user_id'];
             $order->status="Processing";
             $order->payment_method=$req->payment;
             $order->payment_status="Pending";
             $order->address=$req->address;
             $order->save();
             Cart::where('user_id',$userId)->delete(); 
         }
         $req->input();
         return redirect('/home');
    }

    function myOrders()
    {
        $userId=Session::get('id',session('LoggedUser'));
        $sorders= DB::table('orders')
         ->join('sofas','orders.product_id','=','sofas.id')
         ->where('orders.user_id',$userId)
         ->get();

        $torders= DB::table('orders')
         ->join('tables','orders.product_id','=','tables.id')
         ->where('orders.user_id',$userId)
         ->get();

        $corders= DB::table('orders')
         ->join('chairs','orders.product_id','=','chairs.id')
         ->where('orders.user_id',$userId)
         ->get();
        
         return view('myorders',['sorders'=>$sorders],['torders'=>$torders]);
       
         
    }






}
