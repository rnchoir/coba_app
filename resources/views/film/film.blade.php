@extends('layout.master')

@section('content')
<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Table Film</h4>
                  <p class="card-category"></p>
                </div> 
                <div class="card-body">
                <div class="table-responsive">
                <a href="/film/tambah" class="btn btn-primary text-center" role="button">Tambah Film</a>
                <table id="example2" class="table" role="grid" aria-describedby="example2_info">
                    <thead>
                      <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">JUDUL FILM</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">DESKRIPSI</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">KATEGORI</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">RETING</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">JADWAL RILIS</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">JADWAL TAYANG</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">GAMBAR</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($film as $f)
                      <tr role="row" class="add">
                        <td>{{ $f->judul_film }}</td>
                        <td>{{ $f->deskripsi_film }}</td>
                        <td>{{ $f->kategori }}</td>
                        <td>{{ $f->reting }}</td>
                        <td>{{ $f->jadwal_rilis }}</td>
                        <td>{{ $f->jadwal_tayang }}</td>
                        <td><img class="center" alt="image" height="200" width="300" src="\img\film\{{ $f->foto }}"></td>
                        <td>
                          <a href="film/edit/{{ $f->id }}" class="open_modal_ubah btn btn-sm btn-primary shadow-sm"><i class="fa fa-bars"></i>  Edit</a>
                          <a href="film/details/{{ $f->id }}" class="open_modal_ubah btn btn-sm btn-primary shadow-sm"><i class="fa fa-bars"></i>  Details</a>
                          <a href="film/hapus/{{ $f->id }}" class="btn btn-danger btn-sm delete-link"><i class="fa fa-trash"></i>  Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
@endsection