<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Contact;
use App\Models\PhotoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GalleryPhotoController extends Controller
{
    public function index() {
        $photos = PhotoGallery::paginate(50);
        $contact = Contact::latest()->first();
        $majorId = Major::select('id','name')->get();

        return view('global.galeri', compact('photos', 'contact', 'majorId'));
    }
}
