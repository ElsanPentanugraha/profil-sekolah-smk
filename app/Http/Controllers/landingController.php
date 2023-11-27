<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Contact;
use App\Models\Information;
use Illuminate\Http\Request;

class landingController extends Controller
{
    public function index() {
        $posts = Information::with('category')->orderByDesc('created_at')->paginate(5);
        $contact = Contact::latest()->first();
        $majorId = Major::select('id','name')->get();

        return view('global.home', compact('posts', 'contact', 'majorId'));
    }
}
