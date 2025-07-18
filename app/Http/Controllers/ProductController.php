<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addToCard(Request $request){
        $product = json_decode($request->input("product"), true);
        $cart = session("chooseProducts",[]);
        $cart[] = $product;
        session(['chooseProducts'=>$cart]);
        return redirect()->back();
    } 
}