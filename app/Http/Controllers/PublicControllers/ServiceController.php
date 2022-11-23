<?php

namespace App\Http\Controllers\PublicControllers;

use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        return view('pages.services.index');
    }
}
