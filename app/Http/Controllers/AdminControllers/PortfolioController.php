<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Portfolio\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolio.portfolios.create');
    }

    public function store(Request $request)
    {
        $portfolio = new Portfolio();
        $portfolio['title'] = $request->input('title');
        $portfolio['content'] = $request->input('content');
        $portfolio['categories'] = $request->input('categories');
        $portfolio['is_published'] = $request->input('is_published');
        $portfolio['slug'] = $request->input('slug');
        $portfolio['user_id'] = $request->user()->id;
        if($request->file('image')){
            $file= $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('img/portfolio'), $filename);
            $portfolio['image'] = $filename;
        }
        $portfolio->save();
        return redirect()->route('portfolio.index');
    }

    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        return view('admin.portfolio.portfolios.edit', compact('portfolio'));
    }

    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->title = $request->input('title');
        $portfolio->slug = $request->input('slug');
        $portfolio->content = $request->input('content');
        $portfolio->categories = $request->input('categories');
        $portfolio->is_published = $request->input('is_published');
        if($request->hasFile('image'))
        {
            $destination = 'img/portfolio'.$portfolio->image;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('img/portfolio'), $filename);
            $portfolio['image'] = $filename;
        }
        $portfolio->update();
        return redirect()->route('portfolios.index');
    }

    public function delete($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return redirect()->route('portfolios.index');
    }
}
