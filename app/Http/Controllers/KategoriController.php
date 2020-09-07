<?php

namespace App\Http\Controllers;

use App\film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function romance()
    {
        $film = film::where('kategori', 'Romance')->get();
        // mengirim data user ke view index.blade.php
        return view('kategori.romance', ['film' => $film]);
    }
    public function action()
    {
        $film = film::where('kategori', 'Action')->get();
        // mengirim data user ke view index.blade.php
        return view('kategori.action',['film' => $film]);
    }
    public function comedy()
    {
        $film = film::where('kategori', 'Comedy')->get();
        // mengirim data user ke view index.blade.php
        return view('kategori.comedy', ['film' => $film]);
    }
}
