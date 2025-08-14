<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavController extends Controller
{

    public $products = [
        [
            "img" => ["assets/product.svg",  "assets/product.svg", "assets/product.svg"],
            "title" => "Пристрій швидкого спорядження набоїв",
            "characteristics" => ["AK", "Калібр — 5,45", "Калібр — 7,62", "Вага — 56 гр"],
            "subtitle" => "Портативний та легкий пристрій. Може використовуватись за несприятливих погодних умов (в дощ/сніг, при
низькій/високій температурі) ",
            "details" => ['Всі металеві компоненти – з нержавіючої сталі', 'Механізм кріплення повністю співпадає з оригінальним на
зброї ', 'Є можливість кріплення до спорядження ', 'Повністю сумісний як з армійськими так і з цивільними магазинами
різних виробників'],
            "benefits" => ["Зручніше в темряві", "Зручніше на морозі", "Швидше споряджання", "Менше зусиль при заряджанні"],
            "cost" => 10,
            "count" => "1 345",
            "quantity" => 1
        ],
        [
            "img" => ["assets/product.svg", "assets/product.svg", "assets/product.svg"],
            "title" => "Пристрій швидкого спорядження набоїв",
            "characteristics" => ["AK", "Калібр — 5,45", "Калібр — 7,62", "Вага — 56 гр"],
            "subtitle" => "Портативний та легкий пристрій. Може використовуватись за несприятливих погодних умов (в дощ/сніг, при
низькій/високій температурі) ",
            "details" => ['Всі металеві компоненти – з нержавіючої сталі', 'Механізм кріплення повністю співпадає з оригінальним на
зброї ', 'Є можливість кріплення до спорядження ', 'Повністю сумісний як з армійськими так і з цивільними магазинами
різних виробників'],
            "benefits" => ["Зручніше в темряві", "Зручніше на морозі", "Швидше споряджання", "Менше зусиль при заряджанні"],
            "cost" => 10,
            "count" => "1 345",
            "quantity" => 1
        ],

        [
            "img" => ["assets/product.svg", "assets/product.svg", "assets/product.svg"],
            "title" => "Пристрій швидкого спорядження набоїв",
            "characteristics" => ["AK", "Калібр — 5,45", "Калібр — 7,62", "Вага — 56 гр"],
            "subtitle" => "Портативний та легкий пристрій. Може використовуватись за несприятливих погодних умов (в дощ/сніг, при
низькій/високій температурі) ",
            "details" => ['Всі металеві компоненти – з нержавіючої сталі', 'Механізм кріплення повністю співпадає з оригінальним на
зброї ', 'Є можливість кріплення до спорядження ', 'Повністю сумісний як з армійськими так і з цивільними магазинами
різних виробників'],
            "benefits" => ["Зручніше в темряві", "Зручніше на морозі", "Швидше споряджання", "Менше зусиль при заряджанні"],
            "cost" => 10,
            "count" => "1 345",
            "quantity" => 1
        ],

        [
            "img" => ["assets/product.svg",  "assets/product.svg", "assets/product.svg"],
            "title" => "Пристрій швидкого спорядження набоїв",
            "characteristics" => ["AK", "Калібр — 5,45", "Калібр — 7,62", "Вага — 56 гр"],
            "subtitle" => "Портативний та легкий пристрій. Може використовуватись за несприятливих погодних умов (в дощ/сніг, при
низькій/високій температурі) ",
            "details" => ['Всі металеві компоненти – з нержавіючої сталі', 'Механізм кріплення повністю співпадає з оригінальним на
зброї ', 'Є можливість кріплення до спорядження ', 'Повністю сумісний як з армійськими так і з цивільними магазинами
різних виробників'],
            "benefits" => ["Зручніше в темряві", "Зручніше на морозі", "Швидше споряджання", "Менше зусиль при заряджанні"],
            "cost" => 10,
            "count" => "1 345",
            "quantity" => 1
        ],

        [
            "img" => ["assets/product.svg", "assets/product.svg", "assets/product.svg"],
            "title" => "Пристрій швидкого спорядження набоїв",
            "characteristics" => ["AK", "Калібр — 5,45", "Калібр — 7,62", "Вага — 56 гр"],
            "subtitle" => "Портативний та легкий пристрій. Може використовуватись за несприятливих погодних умов (в дощ/сніг, при
низькій/високій температурі) ",
            "details" => ['Всі металеві компоненти – з нержавіючої сталі', 'Механізм кріплення повністю співпадає з оригінальним на
зброї ', 'Є можливість кріплення до спорядження ', 'Повністю сумісний як з армійськими так і з цивільними магазинами
різних виробників'],
            "benefits" => ["Зручніше в темряві", "Зручніше на морозі", "Швидше споряджання", "Менше зусиль при заряджанні"],
            "cost" => 10,
            "count" => "1 345",
            "quantity" => 1
        ],

        [
            "img" => ["assets/product.svg",  "assets/product.svg", "assets/product.svg"],
            "title" => "Пристрій швидкого спорядження набоїв",
            "characteristics" => ["AK", "Калібр — 5,45", "Калібр — 7,62", "Вага — 56 гр"],
            "subtitle" => "Портативний та легкий пристрій. Може використовуватись за несприятливих погодних умов (в дощ/сніг, при
низькій/високій температурі) ",
            "details" => ['Всі металеві компоненти – з нержавіючої сталі', 'Механізм кріплення повністю співпадає з оригінальним на
зброї ', 'Є можливість кріплення до спорядження ', 'Повністю сумісний як з армійськими так і з цивільними магазинами
різних виробників'],
            "benefits" => ["Зручніше в темряві", "Зручніше на морозі", "Швидше споряджання", "Менше зусиль при заряджанні"],
            "cost" => 10,
            "count" => 1345,
            "quantity" => 1
        ],
    ];

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
        $products = $this->products;
        return view("pages.weaponPage", compact("products"));
    }

    public function getMedkitsPage()
    {
        $products = $this->products;
        return view("pages.medkitsPage", compact("products"));
    }

    public function getRadioSetPage()
    {
        $products = $this->products;
        return view("pages.radioSetPage", compact("products"));
    }

    public function getDronesPage()
    {
        $products = $this->products;
        return view("pages.dronesPage", compact("products"));
    }

    public function getSupportPage()
    {
        $products = $this->products;
        return view("pages.supportPage", compact("products"));
    }

    public function getRebPage()
    {
        $products = $this->products;
        return view("pages.rebPage", compact("products"));
    }

    public function getSuccessPage()
    {
        $products = $this->products;
        return view("pages.successPage", compact("products"));
    }

    public function getPageList()
    {
        return view("pages.pageList");
    }
}
