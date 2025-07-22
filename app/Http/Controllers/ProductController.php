<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addToCart(Request $request)
    {
        $product = json_decode(base64_decode($request->input('product')), true);
        $cart = session()->get('chooseProducts', []);
        $cart[] = $product;
        session(['chooseProducts' => $cart]);
        return redirect()->back()->with('success', '');
    }

    public function removeFromCart(Request $request)
    {
        $index = $request->input('index');
        $cart = session()->get('chooseProducts', []);
        unset($cart[$index]);
        $cart = array_values($cart);
        session(['chooseProducts' => $cart]);
        return redirect()->back()->with('success', '');
    }
}
