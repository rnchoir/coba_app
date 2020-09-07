<?php

namespace App\Http\Controllers;

use App\film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RomanceController extends Controller
{
    public function index()
    {
        $film = film::where('kategori', 'Romance')->get();
        // mengirim data user ke view index.blade.php
        return view('kategori.romance', ['film' => $film]);
    }
}
