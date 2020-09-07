<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Fpdf;

class PesananController extends Controller
{
    public function index()
    {
        $data = Booking::where('user','>',2)->count();
        if($data > 2){
            $data = Booking::where('user', 3)->get();
        } elseif($data < 2){
            $data = Booking::where('user', 1)->get();
        }
        return view('pesanan.pesanan', compact('data'));
    }
    public function tiket(){
        $fpdf = new Fpdf();
        $fpdf::AddPage();
        $fpdf::SetFont('Arial','B',16);
        $fpdf::Cell(40,10,'Hello World!');
        $fpdf::Output();
        exit;
    }
}