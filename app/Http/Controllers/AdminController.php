<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!session('user') || session('user')->plan_id != 3) return abort('403');        
        if (request('search')) {
            $movies = Movie::where('name', 'like', '%'.request('search').'%')
                            ->orWhere('tags', 'like', '%'.request('search').'%')
                            ->get();
        }
        else {
            $movies = Movie::all();
        }

        return view('admin.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!session('user') || session('user')->plan_id != 3) return abort('403');  
        $movies = Movie::all();
        $artists = Artist::all();
        $genres = Genre::all();
        return view('admin.create', compact('movies', 'artists', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'studio' => 'required',
            'link' => 'required|url',
            'release_date' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'genre' => 'required'
        ],
        [
            'name.required' => 'Judul tidak boleh kosong',
            'studio.required' => 'Studio tidak boleh kosong',
            'link.required' => 'Link harus disertakan',
            'link.url' => 'Format link salah',
            'release_date.required' => 'Setiap judul harus memiliki tanggal rilis',
            'image.required' => 'Gambar tidak boleh kosong',
            'image.image' => 'Format gambar salah',
            'genre.required' => 'Genre tidak boleh kosong'
        ]);

        $imagePath = $request->file('image')->store('images', 'public');
        
        Movie::create([
            'name' => $request->name,
            'studio' => $request->studio,
            'link' => $request->link,
            'release_date' => $request->release_date,
            'image' => $imagePath,
            'paid' => $request->paid,
            'tags' => $request->tags
        ]);

        $itemID = Movie::latest()->firstorFail()->id;

        $movie = Movie::find($itemID);
        $movie->genre()->attach($request->genre);

        return redirect('/admin')->with('pesan', 'Data baru berhasil ditambahkan, tambahkan pemeran atau genre melalui edit film.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (!session('user') || session('user')->plan_id != 3) return abort('403');  
        $movie = Movie::findorfail($id);
        $genres = Genre::all();
        $artists = Artist::all();

        return view('admin.show',  compact('movie', 'artists', 'genres'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if (!session('user') || session('user')->plan_id != 3) return abort('403');  
        $movie = Movie::findorfail($id);
        return view('admin.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'studio' => 'required',
            'link' => 'required|url',
            'release_date' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ],
        [
            'name.required' => 'Judul tidak boleh kosong',
            'studio.required' => 'Studio tidak boleh kosong',
            'link.required' => 'Link harus disertakan',
            'link.url' => 'Format link salah',
            'release_date.required' => 'Setiap judul harus memiliki tanggal rilis',
            'image.required' => 'Gambar tidak boleh kosong',
            'image.image' => 'Format gambar salah',
        ]);

        $movie = Movie::findorfail($id);

        if ($movie->image) {
            Storage::delete('public/'.$movie->image);
        }
        
        $imagePath = $request->file('image')->store('images', 'public');
        $movie->update([
            'name' => $request->name,
            'studio' => $request->studio,
            'link' => $request->link,
            'release_date' => $request->release_date,
            'image' => $imagePath,
            'paid' => $request->paid,
            'tags' => $request->tags
        ]);

        return redirect('/admin')->with('pesan', 'Film berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!session('user') || session('user')->plan_id != 3) return abort('403');  
        $movies = Movie::findorfail($id);
        if ($movies->image) {
            Storage::delete('public/'.$movies->image);
        }
        $movies->genre()->detach();
        $movies->artist()->detach();
        $movies->delete();

        return redirect('/admin')->with('pesan', 'Data berhasil dihapus');
    }
}
