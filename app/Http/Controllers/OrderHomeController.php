<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use Auth;

class OrderHomeController extends Controller
{
    public function checkout ()
    {
        $carts = session('cart') ? session('cart') : [];
        $acc = Auth::guard('account')->user();
        return view('site.checkout', compact('carts','acc'));
    }

    public function post_checkout(Request $req)
    {
        $carts = session('cart') ? session('cart') : [];
        if ($carts) {
            $data = $req->all('name','email','phone','address','shipping_method','payment_method','order_note');
            $data['account_id'] = Auth::guard('account')->user()->id;
            $order = Order::create($data);
    
            if ($order) {
                foreach ($carts as $key => $item) {
                    OrderDetail::create([
                        'product_id' => $item->id,
                        'order_id' => $order->id,
                        'price' => $item->price,
                        'quantity' => $item->quantity
                    ]);
                }
                session(['cart' => null]);
            }
        }

        return redirect()->route('home');
    }

    public function order()
    {
       $acc_id = Auth::guard('account')->user()->id;
       $orders = Order::where('account_id', $acc_id)->orderBy('id','DESC')->get();
       return view('site.order', compact('orders'));
    }

    public function detail (Order $order)
    {
        return view('site.order_detail', compact('order'));
    }
}
