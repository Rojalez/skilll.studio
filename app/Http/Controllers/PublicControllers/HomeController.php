<?php

namespace App\Http\Controllers\PublicControllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|digits:10|numeric',
            'message' => 'required'
        ]);

        Contact::create($request->all());

        return redirect()->back()
            ->with(['success' => 'Спасибо за обращение. Мы с вами свяжемся!']);
    }
}
