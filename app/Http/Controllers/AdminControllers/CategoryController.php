<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Blog\Post;
use App\Models\Blog\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index(): Factory|View|Application
    {
        $categories = Category::all();
        return view('admin.blog.categories.index', compact('categories'));
    }


    public function create(): Factory|View|Application
    {
        return view('admin.blog.categories.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();
        if($request->file('image')){
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('img/category'), $filename);
            $data['image'] = $filename;
        }
        Category::create($data);
        return redirect()->route('categories.index');
    }

    public function edit($id): Factory|View|Application
    {
        $category = Category::find($id);
        return view('admin.blog.categories.edit', compact('category'));
    }

    public function update(Request $request, $id): RedirectResponse
    {

        $category = Category::find($id);
        $category->title = $request->input('title');
        $category->description = $request->input('description');
        $category->slug = $request->input('slug');
        if($request->hasFile('image'))
        {
            $destination = 'img/category'.$category->image;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('img/category'), $filename);
            $category['image'] = $filename;
        }
        $category->update();
        return redirect()->route('categories.index');
    }

    public function delete($id): RedirectResponse
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories.index');
    }
}


