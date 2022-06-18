<?php

namespace App\Http\Controllers\PublicControllers;

use App\Http\Controllers\Controller;
use App\Models\Blog\Post;
use App\Models\Blog\Category;
use App\Models\User;


class PostController extends Controller
{
    public function index($slug)
    {
        $users = User::all();
        $categories = Category::all();
        $post = Post::with('categories')->where('slug', $slug)->first();
        $posts = Post::whereHas('categories', function($query) use ($post) {
            $query->whereIn('id', $post->categories->pluck('id'));
        })->whereNotIn('id', [$post->id])->orderBy('created_at', 'desc')->take(5)->get();

        $previous_post = Post::where('id', '<', $post->id)->orderBy('id','desc')->first();
        $next_post = Post::where('id', '>', $post->id)->orderBy('id','asc')->first();
        return view('pages.blog.article', compact('posts', 'users', 'categories', 'previous_post', 'next_post'))->withPost($post);
    }

}
