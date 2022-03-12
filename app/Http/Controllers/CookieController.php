<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function setCookie()
    {
        $mins = 2;
        $res = new Response('Cookie Set (name)');
        $res->withCookie(cookie('name', 'Respected Roshan Kumar!', $mins));
        return $res;
    }

    public function getCookie(Request $req)
    {
        $value = $req->cookie('name');
        if (!$value) $value = "?";
        return new Response('Cookie available: ' . $value);
    }

    public function deleteCookie()
    {
        $res = new Response('Cookie (name) deleted successfully');
        $res->withCookie(cookie('name', null, 0));
        return $res;
    }
}
