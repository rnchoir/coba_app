@extends('layout.master')

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Dashboard</h4>
            </div>
            <div class="card-body">
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>
                        Hi <strong></strong>, 
                        Anda login sebagai 
                            <span class="btn btn-success">Admin</span>
                    </p>
            </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection