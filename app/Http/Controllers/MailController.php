<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(Request $request)
    {
        $mailData = [
            "title" => "Mail from it solution",
            "body" => "This is for testing email using smtp"
        ];

        Mail::to('hein1127htet@gmail.com')->queue(new DemoMail($mailData));

        dd("Email is sent successfully");
    }
}
