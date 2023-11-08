<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InformationController extends Controller
{
    public function index() {
        $information = Information::with('category')->get();
        return view('admin.information', ['informationlist' => $information]);
    }

    public function show($id) {
        $information = Information::with('category')->findOrFail($id);
        return view('admin.detail-information', ['information' => $information]);
    }

    public function create() {
        $category = Category::all();
        return view('admin.add-information', ['categorylist' => $category]);
    }

    public function store(Request $request) {
        $imagename = '';
        if ($request->file('photo')) {
            $extensionimage = $request
                ->file('photo')
                ->getClientOriginalExtension();
            $imagename =
                $request->name . '-' . now()->timestamp . '.' . $extensionimage;
            $request->file('photo')->storeAS('image', $imagename);
        }

        $request['image'] = $imagename;
        $information = Information::Create($request->all());


        if ($information) {
            $information->category()->attach($request->category_id);

            Session::flash('status', 'success');
            Session::flash('message', 'Artikel Berhasil di buat!');
        }

        return redirect('/admin/information-management');
    }

    public function edit(Request $request, $id) {
        $categories = Category::all();
        $information = Information::findOrFail($id);

        return view('admin.edit-information', ['categories' => $categories, 'information' => $information]);
    }

    public function update(Request $request, $id) {
        $information = Information::findOrFail($id);

        $imagename = '';
        if ($request->file('photo')) {
            $extensionimage = $request
                ->file('photo')
                ->getClientOriginalExtension();
            $imagename =
                $request->name . '-' . now()->timestamp . '.' . $extensionimage;
            $request->file('photo')->storeAS('image', $imagename);
        }
        $request['image'] = $imagename;
        $information->update($request->all());
        $information->category($id)->sync($request->category_id);

        if ($information) {

            Session::flash('status', 'success');
            Session::flash('message', 'Artikel Berhasil di perbarui!');
        }

        return redirect('/admin/information-management');
    }

    public function delete($id) {
        $information = Information::findOrFail($id);
        $information->category($id)->detach();
        $information->delete();

        if ($information) {
            Session::flash('status', 'success');
            Session::flash('message', 'Artikel Berhasil di hapus!');
        }

        return redirect('/admin/information-management');
    }
}
