<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InformationController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        $informations = Information::with('category')
            ->where('name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('write_by', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('category', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->orderByDesc('created_at')
            ->paginate(10);

        $contact = Contact::latest()->first();
        $categories = Category::all();
        $majorId = Major::select('id', 'name')->get();

        return view(
            'global.information',
            compact('informations', 'contact', 'categories', 'majorId')
        );
    }

    public function showArchive($year = null, $month = null)
    {
        $informations = Information::when($year, function ($query, $year) {
            return $query->whereYear('created_at', $year);
        })
            ->when($month, function ($query, $month) {
                return $query->whereMonth('created_at', $month);
            })
            ->latest()
            ->paginate(10);

        $contact = Contact::latest()->first();
        $categories = Category::all();
        $majorId = Major::select('id', 'name')->get();

        return view(
            'global.information',
            compact('informations', 'contact', 'categories', 'majorId')
        );
    }

    public function show($id)
    {
        $information = Information::with('category')->findOrFail($id);
        $contact = Contact::latest()->first();
        $majorId = Major::select('id', 'name')->get();

        return view(
            'global.detail-information',
            compact('information', 'contact', 'majorId')
        );
    }

    public function filterByCategory(Request $request)
    {
        $contact = Contact::latest()->first();
        $categories = Category::all();
        $majorId = Major::select('id', 'name')->get();

        $selectedCategories = $request->input('categories', []);

        $informations = Information::with('category')
            ->whereHas('category', function ($query) use ($selectedCategories) {
                $query->whereIn('id', $selectedCategories);
            })
            ->orderByDesc('created_at')
            ->paginate(10);

        return view(
            'global.information',
            compact('categories', 'informations', 'contact', 'majorId')
        );
    }

    public function showAnnouncement()
    {
        $informations = Information::with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'Pengumuman');
            })
            ->orderByDesc('created_at')
            ->paginate(10);

        $contact = Contact::latest()->first();
        $majorId = Major::select('id', 'name')->get();

        return view(
            'global.announcement',
            compact('informations', 'contact', 'majorId')
        );
    }

    public function showNews()
    {
        $informations = Information::with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'Berita');
            })
            ->orderByDesc('created_at')
            ->paginate(10);

        $contact = Contact::latest()->first();
        $majorId = Major::select('id', 'name')->get();

        return view(
            'global.news',
            compact('informations', 'contact', 'majorId')
        );
    }

    public function showArticle()
    {
        $informations = Information::with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'Artikel');
            })
            ->orderByDesc('created_at')
            ->paginate(10);

        $contact = Contact::latest()->first();
        $majorId = Major::select('id', 'name')->get();

        return view(
            'global.news',
            compact('informations', 'contact', 'majorId')
        );
    }
}
