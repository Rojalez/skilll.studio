<?php

namespace App\Http\Controllers\PublicControllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class StoreLoginController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('pages.login');
    }
}
