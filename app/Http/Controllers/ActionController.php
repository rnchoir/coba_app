<?php

namespace App\Http\Controllers;

use App\film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActionController extends Controller
{
    public function index()
    {
        $film = film::where('kategori', 'Action')->get();
        // mengirim data user ke view index.blade.php
        return view('kategori.action',['film' => $film]);
    }
}
