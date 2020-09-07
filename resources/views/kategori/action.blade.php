@extends('layout.masteruser')
@section('title','Action Film')
@section('content')
<!-- start banner Area -->
<div class="row d-flex justify-content-center">
    <div class="menu-content pb-70 col-lg-8">
        <div class="title text-center">
            <h1 class="mb-10">Film Action</h1>
            <p>Berikut adalah kategori film action paling populer tahun 2020</p>
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