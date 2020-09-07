<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Booking;

class BookingController extends Controller
{
    public function index(){
        $title ='halaman Booking barang';
        $data = Booking::get();
        return view('booking.booking', compact('title','data'));
    }
    public function store($id){
        $cek = DB::table('film')->where('id',$id)->where('tiket','>',0)->count();
        if($cek > 0){
            DB::table('booking')->insert([
                'film'=>$id,
                'user'=>\Auth::user()->id,
                'harga' => $id,
            ]);
            Session::flash('sukses', 'anda telah behasil boking tiket');
            return redirect('/');
        } else{
            Session::flash('gagal', 'tiket telah habis, silahkan pilih film lain');
            return redirect('/');
        }

    }
    public function status($id){
        booking::where('id',$id)->update(['status' => 1]);

        return redirect('booking');
    }
}
