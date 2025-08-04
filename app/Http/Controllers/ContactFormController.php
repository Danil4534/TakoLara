<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ContactFormController extends Controller
{


    public function submitContactDataPost(Request $request)
    {


        $request->validate([
            'name' => 'required|string|max:255',
            "phoneNum" => "required|regex:/^\+380\d{9}$/",
            "email" => "required|email",
            "theme" => "required|min:2",


        ], [
            'name.required' => 'Ім’я обов’язкове',
            'theme' => "Тема обов'язкова",
            'phoneNum.required' => 'Номер телефону обов’язковий',
            'phoneNum.regex' => 'Номер телефону має бути у форматі +380XXXXXXXXX',
            'email.required' => 'Пошта обов’язкова',
            'email.email' => 'Невірний формат пошти',
            'theme.required' => 'Тема обов’язкова',
        ]);

        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "phoneNum" => $request->phoneNumber,
            "theme" => $request->theme,
            "comment" => $request->comment
        ];


        if ($request->input('action') === "success") {
            session()->flash('show_success_modal', true);
            return redirect()->back();
        }
        return redirect()->back()->with("error", "");
    }
}
