<?php

namespace App\Http\Controllers\PublicControllers;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PricingController extends Controller
{
    public function index(): Factory|View|Application
    {
        $faqs = Faq::all();
        return view('pages.pricing', compact('faqs'));
    }
}
