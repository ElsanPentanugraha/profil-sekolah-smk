<?php

namespace App\Http\Controllers;

use App\Models\PhotoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AdminGalleryPhotoController extends Controller
{
    public function index()
    {
        $photos = PhotoGallery::all();

        return view('admin.image', ['photos' => $photos]);
    }

    public function create()
    {
        return view('admin.image');
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
            $request->file('photo')->storeAS('gallery', $imagename);
        }

        $request['image'] = $imagename;
        $photos = PhotoGallery::Create($request->all());

        if ($photos) {
            Alert::success('Berhasil!', 'Gambar Berhasil Diunggah');
        }

        return redirect()->back();
    }

    public function delete($id)
    {
        $photo = PhotoGallery::findOrFail($id);
        $photo->delete();

        if ($photo) {
            Alert::success('Berhasil!', 'Gambar Berhasil Hapus dari Galeri');

            return redirect()->back();
        }
    }
}
