@extends('layouts.super')
@section('content')
<div class="">

<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <!-- <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Data balik nama</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail data</li>
          </ol>
        </nav> -->                    
        <h2>Detail data <small>{{$data->pemohon}}</small></h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <div class="row">
          <div class="col-md-5">
            <table class="table table-basic">
              <tr>
                <th>Nama pemohon:</th>
                <td>{{$data->pemohon}}</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Lengkap</label>
                  </div>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Kurang</label>
                  </div>
                </td>
              </tr>                            
              </tr>
              <tr>
                <th>No.pelayanan:</th>
                <td>{{$data->nopel}}</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Lengkap</label>
                  </div>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Kurang</label>
                  </div>
                </td>
              </tr>                            
              </tr>
              <tr>
                <th>Kecamatan:</th>
                <td>{{$data->kecematan}}</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Lengkap</label>
                  </div>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Kurang</label>
                  </div>
                </td>
              </tr>                            
              </tr>
              <tr>
                <th>Kelurahan:</th>
                <td>{{$data->kelurahan}}</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Lengkap</label>
                  </div>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Kurang</label>
                  </div>
                </td>
              </tr>                            
              </tr>  
              <tr>
                <th>Alamat: </th>
                <td>{{$data->alamat}}</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Lengkap</label>
                  </div>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Kurang</label>
                  </div>
                </td>
              </tr>                            
              </tr>                           
              <tr>
                <th>Kabupaten:</th>
                <td>Bulukumba</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Lengkap</label>
                  </div>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Kurang</label>
                  </div>
                </td>
              </tr>                            
              </tr> 
              <tr>
                <th>NOP: </th>
                <td>{{$data->nop}}</td>
                <td>
                  <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Lengkap</label>
                  </div>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Kurang</label>
                  </div>
                </td>
              </tr>                            
              </tr>                                                                       
            </table>                        
          </div>
          <div class="col-md-7">
            <div class="container"  style="display: flex;">
              <div class="row">
                <div class="col-md-12">
                	  @foreach($file as $f)
	                  <div class="card" style="width: 18rem; margin-left: 30px;">
	                    <img class="card-img-top" src="{{asset('files/'.'/'.$f->filename)}}" alt="Card image cap" style="max-width: 200px; min-height: 200px">
	                    <div class="card-body" style="margin-top: 10px;">
	                      <button type="button" class="btn btn-success btn-xs bg-red" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Kurang</button>
	                      <button type="button" class="btn btn-success btn-xs">Lengkap</button>
	                    </div>
	                  </div>
	                  @endforeach
                </div>
              </div>                      
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