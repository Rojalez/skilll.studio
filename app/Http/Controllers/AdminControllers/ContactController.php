<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $emails = Contact::all();
        return view('admin.contact.index', compact('emails'));
    }
}
