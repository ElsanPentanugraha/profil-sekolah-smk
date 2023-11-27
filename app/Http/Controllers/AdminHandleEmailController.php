<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminHandleEmailController extends Controller
{
    public function index() {
        $message = Message::all();

        return view('admin.message', compact('message'));
    }

    public function show($id) {
        $mail = Message::findOrFail($id);

        return view('admin.detail-message', compact('mail'));
    }

    public function reply($id) {
        return view('admin.send-replymail');
    }

    public function delete($id) {
        $mail = Message::findOrFail($id);
        $mail->delete();
        if ($mail) {
            Session::flash('status', 'success');
            Session::flash('message', 'Pesan Email sudah berhasil Dihapus!');
        }
        return redirect('/admin/message-management');
    }
}
