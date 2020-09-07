<?php

namespace App\Http\Controllers;

use App\film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index(){
        $film = DB::table('film')->get();
        return view('client.client',['film' => $film]);
    }
    public function details($id)
    {
        $film = DB::table('film')->where('id',$id)->get();

        return view('client.datail', ['film' => $film]);
    }
        public function cart()
    {
        return view('client.cart');
    }
    public function addToCart($id)
    {
       $film = DB::table('film')->where('id',$id)->first();


        if(!$film) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first film
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $film->judul_film,
                        "quantity" => 1,
                        "price" => $film->harga_tiket,
                        "photo" => $film->foto,
                        "weight" => $film->kategori,
                        "description" => $film->deskripsi_film
                    ]
            ];

            session()->put('cart', $cart);

            return redirect('cart')->with('success', 'film added to cart successfully!');
        }

        // if cart not empty then check if this film exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect('cart')->with('success', 'film added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $film->judul_film,
            "quantity" => 1,
            "price" => $film->harga_tiket,
            "photo" => $film->foto,
            "weight" => $film->kategori,
            "description" => $film->deskripsi_film
        ];

        session()->put('cart', $cart);

        return redirect('cart')->with('success', 'film added to cart successfully!');
    }
    public function order()
    {
        $cart = session()->get('cart');

        return view('client.order');
    }
}
