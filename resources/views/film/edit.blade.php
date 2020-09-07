@extends('layout.master')

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Tambah Film</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                <form action="/film/update/{{ $film->id }}" method="post"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="form-group">
                          <input type="hidden" name="id" class="form-control" value="{{$film->id}}">
                        </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="">Judul Film</label>
                          <input type="text" class="form-control" required="required" name="judul" value="{{ $film->judul_film }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="">Kategori Film</label>
                          <input type="text" class="form-control" required="required" name="kategori" value="{{ $film->kategori }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="">Tanggal Rilis</label>
                          <input type="date" class="form-control" required="required" name="rilis" value="{{ $film->jadwal_rilis }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="">Tanggal Tayang</label>
                          <input type="date" class="form-control" required="required" name="tayang" value="{{ $film->jadwal_tayang }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="">Reting Film</label>
                          <input type="text" class="form-control" required="required" name="reting" value="{{ $film->reting }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                      <label for="file">File Gambar</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="file" value="{{ $film->foto }}">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Deskripsi Film</label>
                          <div class="form-group bmd-form-group">
                            <label class=""></label>
                            <textarea type="text" class="form-control" required="required" name="deskripsi" rows="5">{{ $film->deskripsi_film }}</textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>

@endsection