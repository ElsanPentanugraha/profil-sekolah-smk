<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminContactController extends Controller
{
    public function index() {
        $contact = Contact::all();
        return view('admin.contact', ['contactlist' => $contact]);
    }

    public function create() {
        return view('admin.add-contact');
    }

    public function store(Request $request) {
        $contact = Contact::create($request->all());
        if ($contact) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Kontak Berhasil Dibuat!');
        }
        return redirect('/admin/contact-management');
    }

    public function edit($id) {
        $contact = Contact::findOrFail($id);
        return view('/admin/edit-contact', ['contact' => $contact]);
    }

    public function update(Request $request, $id) {
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());
        if ($contact) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Kontak Berhasil Diupdate!');
        }
        return redirect('/admin/contact-management');
    }

    public function delete($id) {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        if ($contact) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Kontak Berhasil Dihapus!');
        }
        return redirect('/admin/contact-management');
    }
}
