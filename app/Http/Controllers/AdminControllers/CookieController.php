<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Cookie;
use Illuminate\Http\Request;

class CookieController extends Controller
{
    public function index()
    {
        $cookie = Cookie::first();
        return view('admin.cookie.index', compact('cookie'));
    }

    public function edit($id)
    {
        $cookie = Cookie::find($id);
        return view('admin.cookie.edit', compact('cookie'));
    }

    public function update(Request $request, $id)
    {
        $cookie = Cookie::find($id);
        $cookie->content = $request->input('content');
        $cookie->update();
        return redirect()->route('admin.cookie.index');
    }

}
