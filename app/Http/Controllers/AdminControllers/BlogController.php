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

class BlogController extends Controller
{
    public function index(): Factory|View|Application
    {
        $posts = Post::all();
        return view('admin.blog.posts.index', compact('posts'));
    }

    public function create(): Factory|View|Application
    {
        $categories = Category::all();
        return view('admin.blog.posts.create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $post = new Post;
        $post['title'] = $request->input('title');
        $post['content'] = $request->input('content');
        $post['is_published'] = $request->input('is_published');
        $post['slug'] = $request->input('slug');
        $post['user_id'] = $request->user()->id;
        if($request->file('image')){
            $file= $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('img/post'), $filename);
            $post['image'] = $filename;
        }
        $post->save();
        $post->categories()->attach($request->input('categories'));
        return redirect()->route('posts.index');
    }

    public function edit($id): Factory|View|Application
    {
        $categories = Category::all();
        $post = Post::find($id);
        return view('admin.blog.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->content = $request->input('content');
        $post->is_published = $request->input('is_published');
        if($request->hasFile('image'))
        {
            $destination = 'img/post'.$post->image;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('img/post'), $filename);
            $post['image'] = $filename;
        }
        $post->update();
        $post->categories()->sync($request->input('categories'));
        return redirect()->route('posts.index');
    }

    public function delete($id): RedirectResponse
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
