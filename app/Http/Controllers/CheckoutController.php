<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $product_data = session('product');

        return view('checkout.index', compact('product_data'));
    }

    public function placeOrder($id)
    {
        Order::create([
            'user_id' => auth()->user()->id,
            'product_id' => $id,
            'price' => session('product')['price'],
        ]);

        session()->flush();

        return view('checkout.confirm');
    }
}
