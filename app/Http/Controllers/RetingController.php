<?php

namespace App\Http\Controllers;

use App\film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RetingController extends Controller
{
    public function reting()
    {
        $film = film::where('reting','>=', 91)->get();
        // mengirim data user ke view index.blade.php
        return view('reting.reting',['film' => $film]);
    }
    public function reting1()
    {
        $film = film::where('reting','<', 91 )->get();
        // mengirim data user ke view index.blade.php
        return view('reting.reting',['film' => $film]);
    }
    public function reting2()
    {
        $film = film::where('reting','<', 81)->get();
        // mengirim data user ke view index.blade.php
        return view('reting.reting',['film' => $film]);
    }
}
