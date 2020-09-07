<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use App\film;

class Filmcontroller extends Controller
{
    public function index(){
        $film = DB::table('film')->get();
        return view('film.film',['film' => $film]);
    }
    public function tambah(){
        return view('film.tambah');
    }
    public function store(Request $request){
        DB::table('film')->insert([
    		'judul_film' => $request->judul,
    		'deskripsi_film' => $request->deskripsi,
    		'kategori' => $request->kategori,
    		'reting' => $request->reting,
    		'jadwal_rilis' => $request->rilis,
    		'jadwal_tayang' => $request->tayang,
    		'foto' => $request->file->getClientOriginalName(),
    	]);
    	$file = $request->file;
    	$tujuan_upload = 'img/film';
    	$file->move($tujuan_upload,$file->getClientOriginalName());

    	return redirect('/film');
    }
    public function edit($id){
        $film = film::find($id);
        return view('film/edit',['film' => $film]);
    }
    public function update($id,Request $request){
	    $film = film::find($id);
        $film->judul_film = $request->judul;
        $film->deskripsi_film = $request->deskripsi;
        $film->kategori = $request->kategori;
        $film->reting = $request->reting;
        $film->jadwal_rilis = $request->rilis;
        $film->jadwal_tayang = $request->tayang;
        if ($request->hasfile('foto')){
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $file->move($tujuan_upload,$file->getClientOriginalName());            
        }
        $film->save();
        return redirect('/film');
    }
    public function hapus($id)
    {
    	
    	$file = DB::table('film')->where('id',$id)->first();
    	File::delete('img/film/'.$file->foto);
    	DB::table('film')->where('id',$id)->delete();

    	return redirect('/film');
    }
    public function details($id)
    {
        $film = DB::table('film')->where('id',$id)->get();

        return view('film.datail', ['film' => $film]);
    }
}
