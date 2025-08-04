<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    public function checkoutForm(Request $request)
    {


        $request->validate([
            'surname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'middlename' => 'required|string|max:255',
            'phoneNum' => 'required|regex:/^\+380\d{9}$/',
            'city' => 'required|string',
            'department' => 'required|min:2',
            'contact_phone' => 'required|regex:/^\+380\d{9}$/',
        ], [
            'department' => 'Номер відділення обовʼязковий',
            'surname.required' => 'Прізвище обовʼязкове.',
            'firstname.required' => "Імʼя обовʼязкове.",
            'middlename' => 'По батькові обов`язково',
            'phoneNum.required' => 'Номер телефону обовʼязковий.',
            'phoneNum.regex' => 'Номер телефону має бути у форматі +380XXXXXXXXX.',
            'contact_phone.required' => 'Номер для звʼязку обовʼязковий.',
            'contact_phone.regex' => 'Номер має бути у форматі +380XXXXXXXXX.',
            'city.required' => 'Місто обовʼязкове.',
            'contact_type.required' => 'Оберіть метод звʼязку.',
            'contact_type.in' => 'Невірний метод звʼязку.',
        ]);

        session(['chooseProducts' => []]);
        var_dump($request);
        if ($request->input('action') === "support") {
            session()->flash('show_success_modal', true);
            return redirect()->route('support.page');
        }

        return redirect()->route('home.page');
    }
}
