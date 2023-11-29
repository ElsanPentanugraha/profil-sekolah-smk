<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $user = User::select('id', 'name', 'email', 'password')->get();

        return view('admin.user', ['userlist' => $user]);
    }

    public function create()
    {
        return view('admin.add-user');
    }

    public function store(Request $request)
    {
        $user = User::Create($request->all());
        if ($user) {
            Alert::success('Berhasil!', 'Akun Berhasil Dibuat');
        }

        return redirect('/admin/user-management');
    }

    public function edit(Request $request, $id)
    {
        $user = User::findOrFail($id);
        return view('/admin/edit-user', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        if ($user) {
            Alert::success('Berhasil!', 'Akun Berhasil Diubah');
        }
        return redirect('/admin/user-management');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);

        // Alert::warning(
        //     'Anda yakin ingin menghapus Akun?',
        //     'Tindakan ini tidak dapat dikembalikan.'
        // )
        //     ->showConfirmButton('Ya, Hapus Akun!')
        //     ->showCancelButton('Batal')
        //     ->reverseButtons();

        if ($user) {
            $user->delete();
            Alert::success('Berhasil!', 'Akun Berhasil Dihapus');
            return redirect('/admin/user-management');
        }

    }
}
