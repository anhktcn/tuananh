<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function view()
    {
        $carts = session('cart') ? session('cart') : [];
        return view('site.cart-view', compact('carts'));
    }

    public function add(Product $product)
    {
        $carts = session('cart') ? session('cart') : [];
        $quantity = request('quantity',1);
        if(isset($carts[$product->id])) {
            $carts[$product->id]->quantity +=$quantity;
        }else{
            $item = [
                'id' => $product->id,
                'name' => $product->name,
                'image' => $product->image,
                'price' => $product->sale_price ? $product->sale_price : $product->price,
                'quantity' => $quantity,
            ];
            $item = (object)$item;
            $carts[$product->id] = $item;
        }
       
        session(['cart' => $carts]);

        return redirect()->route('home.cart')->with('ok','Thêm sản phẩm vào giỏ hàng thành công');
    }

    
    public function remove(Product $product)
    {
        $carts = session('cart') ? session('cart') : [];
        if(isset($carts[$product->id])) {
           unset($carts[$product->id]);
           session(['cart' => $carts]);
        }
        return redirect()->route('home.cart')->with('ok','Xóa sản phẩm khỏi giỏ hàng thành công');

    }

    public function update(Product $product, $quantity=1)
    {
        $carts = session('cart') ? session('cart') : [];
        $quantity = request('quantity',1);
        if(isset($carts[$product->id])) {
            $carts[$product->id]->quantity = $quantity;
            session(['cart' => $carts]);
        }

        return redirect()->route('home.cart')->with('ok','Cập nhật số lượng sản phẩm thành công');
    }

     
    public function clear()
    {
        session(['cart' => null]);
        return redirect()->route('home.cart')->with('ok','Xóa giỏ hàng thành công');
    }
}
