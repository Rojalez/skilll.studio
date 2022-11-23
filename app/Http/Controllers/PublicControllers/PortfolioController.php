<?php

namespace App\Http\Controllers\PublicControllers;

use App\Http\Controllers\Controller;
use App\Models\Portfolio\Portfolio;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;


class PortfolioController extends Controller
{
    public function index(User $user): Factory|View|Application
    {
        $portfolios = Portfolio::orderBy('created_at', 'desc')
            ->paginate(6);
        $users = User::all();
        $news = Portfolio::orderBy('created_at', 'desc')->take(4)->get();
        return view('pages.portfolio.index', compact('portfolios', 'user', 'users', 'news'));
    }

    public function item($slug)
    {
        $users = User::all();
        $portfolio = Portfolio::where('slug', $slug)->first();
        $portfolios = Portfolio::whereNotIn('id', [$portfolio->id])->orderBy('created_at', 'desc')
            ->take(5)->get();;
        $previous_portfolio = Portfolio::where('id', '<', $portfolio->id)->orderBy('id','desc')->first();
        $next_portfolio = Portfolio::where('id', '>', $portfolio->id)->orderBy('id','asc')->first();
        return view('pages.portfolio.item', compact('users','portfolios', 'previous_portfolio', 'next_portfolio'))->withPortfolio($portfolio);
    }

    public function author($id): Factory|View|Application
    {

        $users = User::all();
        $author = User::find($id);
        $posts = Portfolio::where('user_id', $id);
        return view('pages.portfolio.author', compact('users','author', 'posts'));
    }
}
