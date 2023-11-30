<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdminInformationController extends Controller
{
    public function index()
    {
        $information = Information::with('category')
            ->orderByDesc('created_at')
            ->get();
        return view('admin.information', ['informationlist' => $information]);
    }

    public function show($id)
    {
        $information = Information::with('category')->findOrFail($id);
        $formattedDate = date('d F Y', strtotime($information->created_at));

        return view('admin.detail-information', [
            'information' => $information,
            'datearticle' => $formattedDate,
        ]);
    }

    public function create()
    {
        $category = Category::all();
        return view('admin.add-information', ['categorylist' => $category]);
    }

    public function store(Request $request)
    {
        $imagename = '';
        if ($request->file('photo')) {
            $extensionimage = $request
                ->file('photo')
                ->getClientOriginalExtension();
            $imagename =
                $request->name . '-' . now()->timestamp . '.' . $extensionimage;
            $request->file('photo')->storeAS('postimage', $imagename);
        }

        $request['image'] = $imagename;
        $information = Information::Create($request->all());

        if ($information) {
            $information->category()->attach($request->category_id);

            Alert::success('Berhasil!', 'Artikel Berhasil Diunggah');
        }

        return redirect('/admin/information-management');
    }

    public function edit(Request $request, $id)
    {
        $categories = Category::all();
        $information = Information::findOrFail($id);

        return view('admin.edit-information', [
            'categories' => $categories,
            'information' => $information,
        ]);
    }

    public function update(Request $request, $id)
    {
        $information = Information::findOrFail($id);

        $imagename = '';
        if ($request->file('photo')) {
            $extensionimage = $request
                ->file('photo')
                ->getClientOriginalExtension();
            $imagename =
                $request->name . '-' . now()->timestamp . '.' . $extensionimage;
            $request->file('photo')->storeAS('postimage', $imagename);
            $request['image'] = $imagename;
        } else {
            $imgname = $information->image;
            $request['image'] = $imgname;
        }

        $information->update($request->all());
        $information->category($id)->sync($request->category_id);

        if ($information) {
            Alert::success('Berhasil!', 'Artikel Berhasil Diedit');
        }

        return redirect('/admin/information-management');
    }

    public function delete($id)
    {
        $information = Information::findOrFail($id);
        $information->category($id)->detach();

        Storage::delete('public/storage/postimage/' . $information->image);
        $information->delete();

        if ($information) {
            Alert::success('Berhasil!', 'Artikel Berhasil Hapus');
            return redirect('/admin/information-management');
        }
    }
}
