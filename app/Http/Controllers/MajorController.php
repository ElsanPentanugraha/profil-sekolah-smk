<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MajorController extends Controller
{
    public function index() {
        $majors = Major::all();
        $contact = Contact::latest()->first();
        $majorId = Major::select('id','name')->get();
        return view('test.major', compact('contact', 'majors', 'majorId'));
    }

    public function show($id) {
        $majorDetail = Major::findOrFail($id);
        $contact = Contact::latest()->first();
        $majorId = Major::select('id','name')->get();
        return view('test.detail-major', compact('contact', 'majorDetail', 'majorId'));
    }
}
