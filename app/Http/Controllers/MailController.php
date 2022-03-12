<?php

namespace App\Http\Controllers;

use App\Mail\MyMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function form()
    {
        return view('mail.form');
    }

    public function sendMail(Request $req)
    {
        try {
            $email = $req->email;
            
            $details = [
                'title' => $req->title,
                'body' => $req->body,
                'subject' => $req->title,
                'from' => 'Roshan Kumar'
            ];

            Mail::to($email)->send(new MyMailer($details));
            return back()->with('success', 'Mail sent successfully');
        } catch (\Throwable $th) {
            // dd($th);
            return back()->with('fail', "Couldn't able to send mail");
        }
        
    }
}
