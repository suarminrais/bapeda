@extends('layouts.admin')

@section('content')
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Arsip :  </h3>
              </div>
            </div>
            <div class="container">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Preview Data</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-bordered">
                        <tr>
                          <th rowspan="2">No</th>
                          <th rowspan="2">NOP</th>
                          <th rowspan="2">Nama Alamat</th>
                          <th colspan="2"><center>BUMI</center></th>
                          <th rowspan="2">NOP</th>
                          <th rowspan="2">Nama Alamat</th>
                          <th colspan="2"><center>BUMI</center></th>
                          <th rowspan="2">KET.</th>                          
                      </tr>
                      <tr>
                          <th>Luas</th>
                          <th>Kelas</th>
                          <th>Luas</th>
                          <th>Kelas</th>
                      </tr>
                      @foreach($data as $d)
                      <tr>
                          <td>{{$d->id}}</td>
                          <td>{{$d->nop}}</td>
                          <td>{{$d->nama}}</td>
                          <td>{{$d->luastanah}}</td>
                          <td>{{$d->kelastanah}}</td>
                          <td>{{$d->nop}}</td>
                          <td>{{$d->pemohon_1}}</td>
                          <td>{{$d->alamat_1}}</td>
                          <td>{{$d->kelas_1}}</td>
                          <td>-</td>                          
                      </tr>
                      @endforeach
                    </table>
                    
            {{ $data->links()}}
                        </div>
                      </div>
  
                    </div>
                  </div>
              </div>
@endsection