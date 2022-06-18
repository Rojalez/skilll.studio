<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class ReviewController extends Controller
{
    public function index(): Factory|View|Application
    {
        $reviews = Review::all();
        return view('admin.reviews.index', compact('reviews'));
    }

    public function create(): Factory|View|Application
    {
        return view('admin.reviews.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();
        Review::create($data);
        return redirect()->route('reviews.index');
    }

    public function edit($id): Factory|View|Application
    {
        $review = Review::find($id);
        return view('admin.reviews.edit', compact('review'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $review = Review::find($id);;
        $review->update($request->all());
        return redirect()->route('reviews.index');
    }

    public function delete($id): RedirectResponse
    {
        $review = Review::find($id);;
        $review->delete();
        return redirect()->route('reviews.index');
    }
}
