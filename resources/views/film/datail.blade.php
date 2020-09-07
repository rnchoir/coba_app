@extends('layout.master')

@section('content')
<div class="container-fluid">
          <div class="row">
          @foreach($film as $f)
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ $f->judul_film }}</h4>
                </div>
                <div class="card-body">
                    <p class="card-category">{{ $f->deskripsi_film }}</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                
                <div class="card-body">
                <img class="center" alt="image" height="100%" width="100%" src="\img\film\{{ $f->foto }}">  
                  <a href="#" class="btn btn-primary btn-round">Booking </a>
                  <a href="/film" class="btn btn-primary btn-round">Kembali </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
@endsection