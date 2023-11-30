<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AdminContactController extends Controller
{
    public function index()
    {
        $contact = Contact::all();

        return view('admin.contact', ['contactlist' => $contact]);
    }

    public function create()
    {
        return view('admin.add-contact');
    }

    public function store(Request $request)
    {
        $contact = Contact::create($request->all());
        if ($contact) {
            Alert::success('Berhasil!', 'Data Kontak Berhasil Ditambahkan');
        }
        return redirect('/admin/contact-management');
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('/admin/edit-contact', ['contact' => $contact]);
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());
        if ($contact) {
            Alert::success('Berhasil!', 'Data Kontak Berhasil Diubah');
        }
        return redirect('/admin/contact-management');
    }

    public function delete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        if ($contact) {
            Alert::success('Berhasil!', 'Data Kontak Berhasil Hapus');

            return redirect('/admin/contact-management');
        }
    }
}
