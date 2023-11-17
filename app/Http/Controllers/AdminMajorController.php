<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminMajorController extends Controller
{
    public function index() {
        $major = Major::all();
        return view('admin.major', ['majorlist' => $major]);
    }

    public function show($id) {
        $major = Major::findOrFail($id);
        return view('admin.detail-major', ['major' => $major]);
    }

    public function create() {
        return view('admin.add-major');
    }

    public function store(Request $request) {
        $imagename = '';
        if ($request->file('photo')) {
            $extensionimage = $request
                ->file('photo')
                ->getClientOriginalExtension();
            $imagename =
                $request->name . '-' . now()->timestamp . '.' . $extensionimage;
            $request->file('photo')->storeAS('majors', $imagename);
        }

        $request['image'] = $imagename;
        $major = Major::create($request->all());

        if ($major) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Informasi Program Keahlian Berhasil Disimpan!');
        }

        return redirect('/admin/major-management');
    }

    public function edit($id) {
        $major = Major::findOrFail($id);
        return view('admin.edit-major', ['major' => $major]);
    }

    public function update(Request $request, $id) {
        $major = Major::findOrFail($id);

        $imagename = '';
        if ($request->file('photo')) {
            $extensionimage = $request
                ->file('photo')
                ->getClientOriginalExtension();
            $imagename =
                $request->name . '-' . now()->timestamp . '.' . $extensionimage;
            $request->file('photo')->storeAS('majors', $imagename);
        }

        $request['image'] = $imagename;
        $major->update($request->all());

        if ($major) {
            Session::flash('status', 'success');
            Session::flash('message', 'Perubahan Data Informasi Program Keahlian Berhasil Disimpan!');
        }

        return redirect('/admin/major-management');
    }

    public function delete($id) {
        $major = Major::findOrFail($id);
        $major->delete();

        if ($major) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Informasi Program Keahlian Berhasil Dihapus!');
        }

        return redirect('/admin/major-management');
    }
}
