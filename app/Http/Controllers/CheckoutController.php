<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $product_data = session('product');

        return view('checkout.index', compact('product_data'));
    }
}
