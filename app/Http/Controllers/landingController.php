<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Contact;
use App\Models\Information;
use Illuminate\Http\Request;

class landingController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        $posts = Information::with('category')
            ->where('name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('write_by', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('category', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->orderByDesc('created_at')
            ->paginate(5);

        $contact = Contact::latest()->first();
        $majorId = Major::select('id', 'name')->get();

        $archives = Information::selectRaw(
            'YEAR(created_at) as year, MONTH(created_at) as month'
        )
            ->groupBy('year', 'month')
            ->orderByDesc('year')
            ->orderByDesc('month')
            ->get();

        return view('global.home', compact('posts', 'contact', 'majorId', 'archives'));
    }
}
