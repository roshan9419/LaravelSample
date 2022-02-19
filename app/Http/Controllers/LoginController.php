<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login_form() {
        return '<h1>This is Login Page</h1>';
    }

    public function login_process() {
        return 'Your Login has been processed';
    }

    public function forgot_password() {
        return 'Your password has been reset';
    }

    // Params access
    public function show($id) {
        return '<h1>Your EmpID: '.$id.'</h1>';
    }

    // Multiple params
    public function user_skills($id, $skill) {
        return '<h1>UserId: <u>'.$id.'</u> has <u>'.$skill.'</u> Skill</h1>';
    }
}
