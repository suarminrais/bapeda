@extends('layouts.super')
@section('content')
<div id="app2" class="">
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Data baru</a></li>
              <li class="breadcrumb-item active" aria-current="page">Detail data</li>
            </ol>
          </nav>                    
          <h2>Detail data <small>{{$data->pemohon}}</small></h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br />
          <div class="row">
            <div class="col-md-5">
              <table class="table table-basic">
                <tr>
                  <th>Pemohon:</th>
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
                <tr>
                  <th>NOP tetangga:</th>
                  <td>{{$data->noptetangga}}</td>
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
                <tr>
                  <th>BLOK:</th>
                  <td>{{$data->blok}}</td>
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
                <tr>
                  <th>N O P:</th>
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
                <tr>
                  <th>Tahun SPPT PBB:</th>
                  <td>{{$data->tahunpbb}}</td>
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
                <tr>
                  <th>Tanggal:</th>
                  <td>Bulukumba, {{$data->tanggal}}</td>
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
                <tr>
                  <th>Luas tanah:</th>
                  <td>{{$data->luastanah}}</td>
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
                <tr>
                  <th>Kelas:</th>
                  <td>{{$data->kelastanah}}</td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input v-model='see' type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Lengkap</label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input v-model='se' type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Kurang</label>
                    </div>
                  </td>                            
                </tr>                                                                                    
              </table>                        
            </div>
            <form method="POST" action="{{route('datavalidasi',$data->id)}}">@method('PUT') @csrf
            <div class="col-md-7">
              <div class="container"  style="display: flex;">
                <div class="row">
                  <div class="col-md-12">
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
              </div></div>
              <div class=" hidden form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status :  <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="status" name="status" required="required" class="form-control col-md-7 col-xs-12" value="DIKERJAKAN">
                </div>
              </div> 
              <hr>
              <center>
                <button v-if="magic" type="submit" class="btn btn-round btn-primary">Kirim</button>
              </center>          
            </div>
            </form> 
            </div>                      
          </div>
        </div>
      </div>
    </div>
  </div>
@stop

@section('js')
<script src="{{asset('js/vue.js')}}"></script>
<script>
  var app = new Vue({
    el: '#app2',
    data:{
      lihat:false,
      see:false,
      se:false,
    },
    computed:{
      magic : function(){
        if(this.see==true) return this.lihat=true
        if(this.se==true) return this.lihat=true
      }
    }
  })
</script>
@stop    