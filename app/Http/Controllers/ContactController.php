<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Contact;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function index() {
        $contact = Contact::latest()->first();
        $majorId = Major::select('id','name')->get();
        return view('global.contact', compact('contact', 'majorId'));
    }

    public function store(Request $request) {
        $mail = Message::create($request->all());
        if ($mail) {
            Alert::success('Berhasil!', 'Email sudah terkirim, Terima kasih sudah menghubungi kami');
        }
        return redirect()->back();
    }
}
