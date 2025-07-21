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
            "phoneNumber" => "required|regex:/^\+380\d{9}$/",
            "email" => "required|email",
            "theme" => "required|string",
   
        ],[
            'name.required' => 'Ім’я обов’язкове',
            'phoneNumber.required' => 'Номер телефону обов’язковий',
            'phoneNumber.regex' => 'Номер телефону має бути у форматі +380XXXXXXXXX',
            'email.required' => 'Пошта обов’язкова',
            'email.email' => 'Невірний формат пошти',
            'theme.required' => 'Тема обов’язкова',
        ]);
            
        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "phoneNumber" => $request->phoneNumber,
            "theme" => $request->theme,
            "comment" => $request->comment
        ]; 
        return redirect()->back()->with("error","");
    }
}
