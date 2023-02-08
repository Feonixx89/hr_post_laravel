<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mail as Mail_2;

class MailController extends Controller
{

    public function index(Request $request)
    {
        $mailData = [
            "name" => $request->name,
            "email" => $request->email,
            "message" => $request->message,
        ];

        Mail::to('hrpost64@gmail.com')->send(new Mail_2($mailData));

        return redirect()->back();
    }
}
