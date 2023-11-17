<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category', ['categorylist' => $category]);
    }

    public function create() {
        return view('admin.add-category');
    }

    public function store(Request $request) {
        $category = Category::create($request->all());
        if ($category) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Kategori Berhasil Dibuat!');
        }
        return redirect('/admin/category-management');
    }

    public function edit($id) {
        $category = Category::findOrFail($id);
        return view('/admin/edit-category', ['category' => $category]);
    }

    public function update(Request $request, $id) {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        if ($category) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Kontak Berhasil Diupdate!');
        }
        return redirect('/admin/category-management');
    }

    public function delete($id) {
        $category = Category::findOrFail($id);
        $category->delete();
        if ($category) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Kontak Berhasil Dihapus!');
        }
        return redirect('/admin/category-management');
    }
}
