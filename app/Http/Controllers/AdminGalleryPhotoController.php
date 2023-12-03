<?php

namespace App\Http\Controllers;

use App\Models\PhotoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
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
        $imageNames = [];

        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $photo) {
                $extension = $photo->getClientOriginalExtension();

                // Gunakan microtime untuk menambahkan presisi timestamp
                $timestamp = now()->timestamp . '_' . microtime(true);

                $imageName =
                    $request->name . '-' . $timestamp . '.' . $extension;
                $photo->storeAs('gallery', $imageName);
                $imageNames[] = $imageName;
            }
        }

        $photos = new PhotoGallery([
            'name' => $request->name,
            'image' => implode(',', $imageNames), // or adjust accordingly
        ]);

        $photos->save();

        if ($photos) {
            Alert::success('Berhasil!', 'Gambar Berhasil Diunggah ke Galeri');
        }

        return redirect()->back();
    }

    public function delete($id)
    {
        $photo = PhotoGallery::findOrFail($id);

        $selectedImage = request('deleteImage');
        Storage::delete('gallery/'.basename($selectedImage));
        $newImages = array_diff(explode(',', $photo->image), [$selectedImage]);
        

        if (count($newImages) > 0) {
            $photo->image = implode(',', $newImages);
            $photo->save();

            if ($photo) {
                Alert::success(
                    'Berhasil!',
                    'Gambar Berhasil Hapus dari Galeri'
                );
            }
        } else {
            Storage::delete('gallery/'.basename($photo->image));
            $photo->delete();

            if ($photo) {
                Alert::success(
                    'Berhasil!',
                    'Data Berhasil Dihapus dari Galeri'
                );
            }
        }

        return redirect()->back();
    }
}
