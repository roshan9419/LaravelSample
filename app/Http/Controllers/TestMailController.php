<?php

namespace App\Http\Controllers;

use App\Mail\MyTestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
    public function form()
    {
        // displaying form for invitation
        return view('mail.holi-form');
    }

    public function sendMail(Request $req)
    {
        try {
            $emails = $req->emails;
            $emails = explode(",", $emails);
            
            $details = [
                'title' => $req->title,
                'body' => $req->body,
                'subject' => "Happy Holi Invitation",
                'from' => 'Roshan Kumar'
            ];
            // Sending mails to all the provided users
            Mail::to($emails)->send(new MyTestMail($details));
            return back()->with('success', 'Mail sent successfully');
        } catch (\Throwable $th) {
            dd($th);
            return back()->with('fail', "Couldn't able to send mail");
        }
        
    }
}
