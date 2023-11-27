<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Major;
use App\Models\Message;
use App\Models\Information;
use App\Models\PhotoGallery;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        $message = Message::count();
        $post = Information::count();
        $major = Major::count();
        $gallery = PhotoGallery::count();
        $user = User::count();

        return view('admin.dashboard', compact('message', 'post', 'major', 'gallery', 'user'));
    }
}
