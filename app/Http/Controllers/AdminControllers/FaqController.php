<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(): Factory|View|Application
    {
        $faqs = Faq::all();
        return view('admin.faqs.index', compact('faqs'));
    }

    public function create(): Factory|View|Application
    {
        return view('admin.faqs.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();
        Faq::create($data);
        return redirect()->route('faqs.index');
    }

    public function edit($id): Factory|View|Application
    {
        $faq = Faq::find($id);
        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $faq = Faq::find($id);
        $faq->update($request->all());
        return redirect()->route('faqs.index');
    }

    public function delete($id): RedirectResponse
    {
        $faq = Faq::find($id);
        $faq->delete();
        return redirect()->route('faqs.index');
    }
}
