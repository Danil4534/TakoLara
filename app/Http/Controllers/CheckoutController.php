<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    public function checkoutForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'surname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'middlename' => 'required|string|max:255',
            'phoneNum' => 'required|regex:/^\+380\d{9}$/',
            'city' => 'required|string',
            'department' => 'required',
            'contact_phone' => 'required|regex:/^\+380\d{9}$/',

        ], [
            'department.required' => 'Номер відділення обовʼязковий',
            'surname.required' => 'Прізвище обовʼязкове.',
            'firstname.required' => "Імʼя обовʼязкове.",
            'middlename.required' => 'По батькові обовʼязково',
            'phoneNum.required' => 'Номер телефону обовʼязковий.',
            'phoneNum.regex' => 'Номер телефону має бути у форматі +380XXXXXXXXX.',
            'contact_phone.required' => 'Номер для звʼязку обовʼязковий.',
            'contact_phone.regex' => 'Номер має бути у форматі +380XXXXXXXXX.',
            'city.required' => 'Місто обовʼязкове.',
        ]);

        if ($validator->fails()) {


            return redirect()
                ->route('checkout.page')
                ->withErrors($validator)
                ->with('products', session('products'));
        }

        session(['chooseProducts' => []]);

        if ($request->input('action') === "support") {
            session()->flash('show_success_modal_cont', true);
            return redirect()->route('support.page')->with('success', '');
        }

        return redirect()->route('success.page')->with('success');
    }
    public function getChooseProductsWithCount(Request $request)
    {

        $action = $request->input('action');
        $products = $request->input('products');

        if (str_starts_with($action, 'remove_')) {
            $index = (int) str_replace('remove_', '', $action);
            unset($products[$index]);
            session(['chooseProducts' => $products]);
            return back();
        }

        if ($action === 'order') {
            session(['chooseProducts' => []]);
            return redirect()->route('checkout.page')->with('products', $products);
        }
    }
}
