<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index() {
        $contact = Contact::latest()->first();
        $majorId = Major::select('id','name')->get();
        return view('test.contact', compact('contact', 'majorId'));
    }
}
