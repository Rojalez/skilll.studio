<?php

namespace App\Http\Controllers\PublicControllers;

use App\Http\Controllers\Controller;
use App\Models\Cookie;

class CookieController extends Controller
{
    public function index()
    {
        $cookie = Cookie::first();
        return view('pages.cookie', compact('cookie'));
    }
}
