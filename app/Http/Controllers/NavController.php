<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavController extends Controller
{

    public function getHomePage()
    {
        return view("pages.homePage");
    }
    public function getCheckout()
    {
        return view("pages.checkoutPage");
    }

}
