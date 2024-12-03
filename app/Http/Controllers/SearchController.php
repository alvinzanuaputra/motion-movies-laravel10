<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        // Cari film berdasarkan nama yang sesuai dengan search term
        $movies = Movie::where('name', 'like', '%' . $searchTerm . '%')->get();

        // Kirim search term ke view agar bisa ditampilkan
        return view('search-results', compact('movies', 'searchTerm'));
    }


}

