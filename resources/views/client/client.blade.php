@extends('layout.masteruser')
@section('title','INFO FILM')
@section('banner')
@section('content')
<section class="" id="home">
    <div class="overlay overlay-bg">
        <img style="height:30%; width:100%;" class="img-fluid" src="{{url('img/banner.jpg')}}" alt="">
    </div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-8">
                <h6 class="text-white">Openning on Cinema 11st September, 2020</h6>
                <h1 class="text-white">
                    The Conjuring: The Devil Made Me Do It
                </h1>
                <p class="pt-20 pb-20 text-white">

                </p>
                <a href="#" class="primary-btn text-uppercase">Pesan Tiket Sekarang</a>
            </div>
        </div>
    </div>
</section>
<div class="row d-flex justify-content-center">
    <div class="menu-content pb-70 col-lg-8">
        <div class="title text-center">
            <h1 class="mb-10">Most Popular</h1>
            <p>Berikut adalah daftar film paling populer tahun 2020</p>
        </div>
    </div>
</div>
<div class="row">
@foreach($film as $f)
    <div class="col-lg-4 col-md-6 single-blog">
        <div class="single-service">
            <div class="thumb">
              <a href="/client/details/{{ $f->id }}"><img class="img" src="\img\film\{{ $f->foto }}" alt="image" height="150" width="300"></a>
            </div>
            <p class="date">{{ $f->jadwal_tayang }}</p>
            <a href="/client/details/{{ $f->id }}">
                <h4>{{ $f->judul_film }}</h4>
            </a>
            <p>
            </p>
            <div class="meta-bottom d-flex justify-content-between">
                <a href="addToCart/{{ $f->id }}" class="text-uppercase primary-btn">Pesan Tiket</a>
            </div>
        </div>
    </div>
    @endforeach
    
@endsection