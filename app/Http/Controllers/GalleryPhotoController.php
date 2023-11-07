<?php

namespace App\Http\Controllers;

use App\Models\PhotoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GalleryPhotoController extends Controller
{
    public function index() {
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
            Session::flash('status', 'success');
            Session::flash('message', 'Gambar Berhasil di unggah!');
        }

        return redirect()->back();
    }

    public function delete($id) {
        $photo = PhotoGallery::findOrFail($id);
        $photo->delete();

        if ($photo) {
            Session::flash('status', 'success');
            Session::flash('message', 'Gambar Berhasil di hapus dari galeri!');
        }

        return redirect()->back();
    }
}
