<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;

class ContactFormController extends Controller
{


    public function submitContactDataPost(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            "phoneNumber" => "required|regex:/^\+380\d{9}$/",
            "email" => "required|email",
            "theme" => "required|string",
            "comment" => "string"
        ]);
        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "phoneNumber" => $request->phoneNumber,
            "theme" => $request->theme,
            "comment" => $request->comment
        ];
        Log::info("Contact Info", $data);
    }
}
