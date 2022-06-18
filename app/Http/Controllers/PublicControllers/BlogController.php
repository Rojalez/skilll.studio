<?php

namespace App\Http\Controllers\PublicControllers;

use App\Http\Controllers\Controller;
use App\Models\Blog\Post;
use App\Models\Blog\Category;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(User $user): Factory|View|Application
    {
        $posts = Post::with('categories')
            ->orderBy('created_at', 'desc')
            ->paginate(6);
        $users = User::all();
        $categories = Category::all();
        $news = Post::orderBy('created_at', 'desc')->take(4)->get();
        return view('pages.blog.index', compact('posts', 'user', 'categories', 'users', 'news'));
    }

    public function category($slug): Factory|View|Application
    {
        $users = User::all();
        $categories = Category::all();
        $category = Category::where('slug', $slug)->first();
        return view('pages.blog.category', compact( 'slug', 'category', 'categories', 'users',));
    }

    public function author($id): Factory|View|Application
    {

        $users = User::all();
        $categories = Category::all();
        $author = User::find($id);
        $posts = Post::where('user_id', $id);
        return view('pages.blog.author', compact('users', 'categories', 'author', 'posts'));
    }
}
