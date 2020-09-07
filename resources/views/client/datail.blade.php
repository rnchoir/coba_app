@extends('layout.masteruser')
@section('title','DETAIL FILM')
@section('banner')
@section('content')
<div class="single-info row mt-40">
    @foreach($film as $f)
						<div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
							<div class="info-thumb">
								<img src="\img\film\{{ $f->foto }}" class="img" alt="image" width="80%">
							</div>
						</div>
						<div class="col-lg-6 col-md-12 no-padding info-rigth">
							<div class="info-content">
								<h2 class="pb-30">{{ $f->judul_film }}</h2>
                                <p>{{ $f->deskripsi_film }}</p>
                                Kategori :
                                <ul class="tags">
									<li><a href="#">{{ $f->kategori }}</a></li>
								</ul><br>
                                <p>Reting {{ $f->reting }} / 100%</p>
								</div>
						</div>
                    </div>
    @endforeach
@endsection