<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Auth;
use DB;

use App\models\Orders;
use App\ItemOrders;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::content();
        $count= Cart::content()->count();
        return view('checkout',compact('cart','count'));
    }
    public function detail($id){
        return $id;
    }
    public function checkout(Request $request){
        $id =Auth::user()->id;
        $data= array('userId'=>$id,'order_status'=>'0');
        Orders::create($data);
        $orderId=  DB::getPdo()->lastInsertId();
        $cart_content = Cart::content();
        foreach ($cart_content as $cart) {
            $detail=array(
                'order_id'=>$orderId,
                'price_id'=>$cart->id,
                'qty_order'=>$cart->qty
            );
//            Cart::destroy();
            ItemOrders::create($detail);
        }

    }
}
