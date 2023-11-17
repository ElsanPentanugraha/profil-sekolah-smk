<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InformationController extends Controller
{
    public function index() {
        $informations = Information::with('category')->orderByDesc('created_at')->paginate(10);
        $contact = Contact::latest()->first();
        $categories = Category::all();
        $majorId = Major::select('id','name')->get();

        return view('test.information', compact('informations', 'contact', 'categories', 'majorId'));
    }

    public function show($id) {
        $information = Information::with('category')->findOrFail($id);
        $contact = Contact::latest()->first();
        $majorId = Major::select('id','name')->get();

        return view('test.detail-information', compact('information', 'contact', 'majorId'));
    }
}
