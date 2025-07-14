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

    public function getWeaponPage()
    {
        return view("pages.weaponPage");
    }

    public function getMedkitsPage()
    {
        return view("pages.medkitsPage");
    }

    public function getRadioSetPage()
    {
        return view("pages.radioSetPage");
    }

    public function getDronesPage()
    {
        return view("pages.dronesPage");
    }

    public function getSupportPage()
    {
        return view("pages.supportPage");
    }

    public function getRebPage()
    {
        return view("pages.rebPage");
    }
}
