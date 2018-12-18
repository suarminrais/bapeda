@extends('layouts.admin')

@section('content') 
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Arsip : </h3>
      </div>
    </div>
    <div class="clearfix"></div> 
    <div class="container">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Preview Data baru </h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>N O P</th>
                  <th>Nama / Alamat</th>
                  <th>Luas Tanah</th>
                  <th>Luas Bangunan</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $d)
                <tr>
                  <th scope="row">{{ $d->id }}</th>
                  <td>{{ $d->nop }}</td>
                  <td>{{ $d->pemohon }}</td>
                  <td>{{ $d->luastanah }}</td>
                  <td>{{ $d->luasbangun }}</td>
                  <td>Data baru</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $data->links()}}
          </div>
        </div>
      </div>
    </div>
    
    <div class="clearfix"></div>
  </div>
@endsection