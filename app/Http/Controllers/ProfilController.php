<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Contact;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index() {
        $contact = Contact::latest()->first();
        $majorId = Major::select('id','name')->get();

        return view('global.profil', compact('contact', 'majorId'));
    }
}
