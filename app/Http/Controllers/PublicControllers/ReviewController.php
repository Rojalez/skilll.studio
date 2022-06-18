<?php

namespace App\Http\Controllers\PublicControllers;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ReviewController extends Controller
{
    public function index(): Factory|View|Application
    {
        $reviews = Review::all();
        return view('pages.review', compact('reviews'));
    }
}
