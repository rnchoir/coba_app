@extends('layout.masteruser')

@section('content')
<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Riwayat Pemesanan</h4>
                  <p class="card-category"></p>
                </div> 
                <div class="card-body">
                <div class="table-responsive">
                <table id="example2" class="table" role="grid" aria-describedby="example2_info">
                    <thead>
                      <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">FILM</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">USER</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">HARGA</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">status</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $b)
                      <tr role="row" class="add">
                        <td>{{ $b->id }}</td>
                        <td>{{ $b->film_r->judul_film }}</td>
                        <td>{{ $b->user_r->name }}</td>
                        <td>{{ $b->film_r->harga_tiket }}</td>
                        @if($b->status == null)
                        <td><label class="open_modal_ubah btn btn-sm shadow-smbtn btn-danger">Belum Lunas</label></td>
                        @elseif($b->status == 1)
                        <td><label class="open_modal_ubah btn btn-sm shadow-smbtn btn-primary">Lunas</label></td>
                        <td><a href="{{ url('/pesanan/pdf')}}" class="open_modal_ubah btn btn-sm btn-primary shadow-sm">Catak Tiket</a></td>
                        @endif
                        <td>
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