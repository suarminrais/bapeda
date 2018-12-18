@extends('layouts.super')
@section('content')
  <div class="">  
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('super.index') }}">Data baru</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail data</li>
              </ol>
            </nav>                    
            <h2>Detail data <small>{{$data->pemohon}}</small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <div class="row">
              <div class="col-md-4">
                <table class="table table-basic">
                  <tr>
                    <th>Pemohon:</th>
                    <td>{{$data->pemohon}}</td>
                  </tr>
                  <tr>
                    <th>No.pelayanan:</th>
                    <td>{{$data->nopel}}</td>
                  </tr>
                  <tr>
                    <th>NOP tetangga:</th>
                    <td>{{$data->noptetangga}}</td>
                  </tr>
                  <tr>
                    <th>Kabupaten:</th>
                    <td>BULUKUMBA</td>
                  </tr>
                  <tr>
                    <th>Kecamatan:</th>
                    <td>{{$data->kecematan}}</td>
                  </tr>
                  <tr>
                    <th>Kelurahan:</th>
                    <td>{{$data->kelurahan}}</td>
                  </tr>   
                  <tr>
                    <th>BLOK:</th>
                    <td>{{$data->blok}}</td>
                  </tr> 
                  <tr>
                    <th>N O P:</th>
                    <td>{{$data->nop}}</td>
                  </tr>
                  <tr>
                    <th>Tahun SPPT PBB:</th>
                    <td>{{$data->tahunpbb}}</td>
                  </tr>                                                                                      
                  <tr>
                    <th>Tanggal:</th>
                    <td>Bulukumba, {{$data->tanggal}}</td>
                  </tr> 
                  <tr>
                    <th>Luas bangunan:</th>
                    <td>{{$data->luasbangun}}</td>
                  </tr>
                  <tr>
                    <th>Luas tanah:</th>
                    <td>{{$data->luastanah}}</td>
                  </tr>
                  <tr>
                    <th>Kelas:</th>
                    <td>{{$data->kelas}}</td>
                  </tr>                                                                                    
                </table>                        
              </div>
              <div class="col-md-8">
                <div class="container"  style="display: flex;">
                  @foreach($file as $f)
                  <div class="card" style="width: 18rem; margin-left: 30px;">
                    <img class="card-img-top" src="{{asset('files/'.'/'.$f->filename)}}" alt="Card image cap" style="max-width: 200px; min-height: 200px">
                    <div class="card-body" style="margin-top: 10px;">
                      <button type="button" class="btn btn-success btn-xs bg-red" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Kurang</button>
                    </div>
                  </div>
                  @endforeach                    
                </div>
                <div class="collapse" id="collapseExample">
                  <div class="card card-body">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </div> 
                <hr>
                <center>
                  <button type="button" class="btn btn-round btn-primary">Kirim</button>
                </center>           
              </div>                      
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop