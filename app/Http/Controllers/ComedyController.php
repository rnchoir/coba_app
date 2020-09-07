<?php

namespace App\Http\Controllers;

use App\film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComedyController extends Controller
{
    public function index()
    {
        $film = film::where('kategori', 'Comedy')->get();
        // mengirim data user ke view index.blade.php
        return view('kategori.comedy', ['film' => $film]);
    }
}
