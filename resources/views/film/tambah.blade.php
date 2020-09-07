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
                <form action="/film/store" method="post"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Judul Film</label>
                          <input type="text" class="form-control" required="required" name="judul">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Kategori Film</label>
                          <input type="text" class="form-control" required="required" name="kategori">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="">Tanggal Rilis</label>
                          <input type="date" class="form-control" required="required" name="rilis">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="">Tanggal Tayang</label>
                          <input type="date" class="form-control" required="required" name="tayang">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Reting Film</label>
                          <input type="text" class="form-control" required="required" name="reting">
                        </div>
                      </div>
                      <div class="col-md-6">
                      <label for="file">File Gambar</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="file">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Deskripsi Film</label>
                          <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating"></label>
                            <textarea type="text" class="form-control" required="required" name="deskripsi" rows="5"></textarea>
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