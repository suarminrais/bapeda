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
                        <li class="breadcrumb-item"><a href="#">Data penggabungan</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail data</li>
                      </ol>
                    </nav>                    
                    <h2>Detail data <small>{{$data->nama}}</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <div class="row">
                      <div class="col-md-7">
                        <div class="x_panel">
                            <div class="x_title">
                              <h2>Daftar WP</h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                              <div class="col-xs-3">
                                <!-- required for floating -->
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs tabs-left">
                                  @for($leng=1; $leng<=$data->jumlah; $leng++)
                                  <li ><a href="#{{$leng}}" data-toggle="tab">Pemohon {{$leng}}</a>
                                  </li>
                                  @endfor
                                </ul>
                              </div>

                              <div class="col-xs-9">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                  <div class="tab-pane active" id="1">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_1}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_1}}</td>
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
	                                        <td>{{$data->nop_1}}</td>
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
	                                        <td>{{$data->kelas_1}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>
                                  
                                  <div class="tab-pane" id="2">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_2}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_2}}</td>
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
	                                        <td>{{$data->nop_2}}</td>
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
	                                        <td>{{$data->kelas_2}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="3">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_3}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_3}}</td>
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
	                                        <td>{{$data->nop_3}}</td>
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
	                                        <td>{{$data->kelas_3}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>
                                  
                                  <div class="tab-pane" id="4">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_4}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_4}}</td>
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
	                                        <td>{{$data->nop_4}}</td>
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
	                                        <td>{{$data->kelas_4}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="5">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_5}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_5}}</td>
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
	                                        <td>{{$data->nop_5}}</td>
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
	                                        <td>{{$data->kelas_5}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>
                                  <div class="tab-pane" id="6">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_6}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_6}}</td>
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
	                                        <td>{{$data->nop_6}}</td>
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
	                                        <td>{{$data->kelas_6}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="7">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_7}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_7}}</td>
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
	                                        <td>{{$data->nop_7}}</td>
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
	                                        <td>{{$data->kelas_7}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="8">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_8}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_8}}</td>
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
	                                        <td>{{$data->nop_8}}</td>
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
	                                        <td>{{$data->kelas_8}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="8">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_8}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_8}}</td>
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
	                                        <td>{{$data->nop_8}}</td>
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
	                                        <td>{{$data->kelas_8}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>
                                  <div class="tab-pane" id="9">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_9}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_9}}</td>
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
	                                        <td>{{$data->nop_9}}</td>
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
	                                        <td>{{$data->kelas_9}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="10">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_10}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_10}}</td>
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
	                                        <td>{{$data->nop_10}}</td>
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
	                                        <td>{{$data->kelas_10}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="11">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_11}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_11}}</td>
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
	                                        <td>{{$data->nop_11}}</td>
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
	                                        <td>{{$data->kelas_11}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="12">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_12}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_12}}</td>
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
	                                        <td>{{$data->nop_12}}</td>
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
	                                        <td>{{$data->kelas_12}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="13">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_13}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_13}}</td>
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
	                                        <td>{{$data->nop_13}}</td>
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
	                                        <td>{{$data->kelas_13}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="14">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_14}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_14}}</td>
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
	                                        <td>{{$data->nop_14}}</td>
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
	                                        <td>{{$data->kelas_14}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="15">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_15}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_15}}</td>
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
	                                        <td>{{$data->nop_15}}</td>
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
	                                        <td>{{$data->kelas_15}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="16">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_16}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_16}}</td>
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
	                                        <td>{{$data->nop_16}}</td>
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
	                                        <td>{{$data->kelas_16}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>
                                  
                                  <div class="tab-pane" id="17">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_17}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_17}}</td>
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
	                                        <td>{{$data->nop_17}}</td>
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
	                                        <td>{{$data->kelas_17}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="18">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_18}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_18}}</td>
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
	                                        <td>{{$data->nop_18}}</td>
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
	                                        <td>{{$data->kelas_18}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="19">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_19}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_19}}</td>
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
	                                        <td>{{$data->nop_19}}</td>
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
	                                        <td>{{$data->kelas_19}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="20">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_20}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_20}}</td>
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
	                                        <td>{{$data->nop_20}}</td>
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
	                                        <td>{{$data->kelas_20}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="21">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_21}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_21}}</td>
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
	                                        <td>{{$data->nop_21}}</td>
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
	                                        <td>{{$data->kelas_21}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>
                                  
                                  <div class="tab-pane" id="22">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_22}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_22}}</td>
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
	                                        <td>{{$data->nop_22}}</td>
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
	                                        <td>{{$data->kelas_22}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="23">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_23}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_23}}</td>
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
	                                        <td>{{$data->nop_23}}</td>
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
	                                        <td>{{$data->kelas_23}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="24">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_24}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_24}}</td>
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
	                                        <td>{{$data->nop_24}}</td>
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
	                                        <td>{{$data->kelas_24}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="25">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_25}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_25}}</td>
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
	                                        <td>{{$data->nop_25}}</td>
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
	                                        <td>{{$data->kelas_25}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="26">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_26}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_26}}</td>
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
	                                        <td>{{$data->nop_26}}</td>
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
	                                        <td>{{$data->kelas_26}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>
                                  
                                  <div class="tab-pane" id="27">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_27}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_27}}</td>
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
	                                        <td>{{$data->nop_27}}</td>
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
	                                        <td>{{$data->kelas_27}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="28">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_28}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_28}}</td>
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
	                                        <td>{{$data->nop_28}}</td>
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
	                                        <td>{{$data->kelas_28}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="29">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_29}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_29}}</td>
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
	                                        <td>{{$data->nop_29}}</td>
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
	                                        <td>{{$data->kelas_29}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="30">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_30}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_30}}</td>
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
	                                        <td>{{$data->nop_30}}</td>
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
	                                        <td>{{$data->kelas_30}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="31">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_31}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_31}}</td>
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
	                                        <td>{{$data->nop_31}}</td>
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
	                                        <td>{{$data->kelas_31}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>
                                  
                                  <div class="tab-pane" id="32">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_32}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_32}}</td>
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
	                                        <td>{{$data->nop_32}}</td>
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
	                                        <td>{{$data->kelas_32}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="33">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_33}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_33}}</td>
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
	                                        <td>{{$data->nop_33}}</td>
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
	                                        <td>{{$data->kelas_33}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="34">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_34}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_34}}</td>
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
	                                        <td>{{$data->nop_34}}</td>
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
	                                        <td>{{$data->kelas_34}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="35">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_35}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_35}}</td>
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
	                                        <td>{{$data->nop_35}}</td>
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
	                                        <td>{{$data->kelas_35}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="36">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_36}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_36}}</td>
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
	                                        <td>{{$data->nop_36}}</td>
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
	                                        <td>{{$data->kelas_36}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>
                                  
                                  <div class="tab-pane" id="37">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_37}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_37}}</td>
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
	                                        <td>{{$data->nop_37}}</td>
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
	                                        <td>{{$data->kelas_37}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="38">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_38}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_38}}</td>
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
	                                        <td>{{$data->nop_38}}</td>
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
	                                        <td>{{$data->kelas_38}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="39">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_39}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_39}}</td>
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
	                                        <td>{{$data->nop_39}}</td>
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
	                                        <td>{{$data->kelas_39}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="40">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_40}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_40}}</td>
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
	                                        <td>{{$data->nop_40}}</td>
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
	                                        <td>{{$data->kelas_40}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="41">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_41}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_41}}</td>
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
	                                        <td>{{$data->nop_41}}</td>
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
	                                        <td>{{$data->kelas_41}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>
                                  
                                  <div class="tab-pane" id="42">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_42}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_42}}</td>
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
	                                        <td>{{$data->nop_42}}</td>
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
	                                        <td>{{$data->kelas_42}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="43">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_43}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_43}}</td>
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
	                                        <td>{{$data->nop_43}}</td>
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
	                                        <td>{{$data->kelas_43}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="44">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_44}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_44}}</td>
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
	                                        <td>{{$data->nop_44}}</td>
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
	                                        <td>{{$data->kelas_44}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="45">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_45}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_45}}</td>
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
	                                        <td>{{$data->nop_45}}</td>
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
	                                        <td>{{$data->kelas_45}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="46">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_46}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_46}}</td>
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
	                                        <td>{{$data->nop_46}}</td>
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
	                                        <td>{{$data->kelas_46}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>
                                  
                                  <div class="tab-pane" id="47">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_47}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_47}}</td>
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
	                                        <td>{{$data->nop_47}}</td>
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
	                                        <td>{{$data->kelas_47}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="48">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_48}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_48}}</td>
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
	                                        <td>{{$data->nop_48}}</td>
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
	                                        <td>{{$data->kelas_48}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="49">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_49}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_49}}</td>
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
	                                        <td>{{$data->nop_49}}</td>
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
	                                        <td>{{$data->kelas_49}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>

                                  <div class="tab-pane" id="50">
	                                    <table class="table table-basic">
	                                      <tr>
	                                        <th>Nama pemohon:</th>
	                                        <td>{{$data->pemohon_50}}</td>
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
	                                        <th>Alamat:</th>
	                                        <td>{{$data->alamat_50}}</td>
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
	                                        <td>{{$data->nop_50}}</td>
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
	                                        <td>{{$data->kelas_50}}</td>
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
	                                    </table> 
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	                                      Berkas
	                                    </button>
	                                    <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <div class="modal-body">
	                                              <div class="row">
	                                                <div class="col-md-8">
	                                                  <div class="container"  style="display: flex;">
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
	                                            
	                                          </div>
	                                          <div class="modal-footer">
	                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                            <button type="button" class="btn btn-primary">Save changes</button>
	                                          </div>
	                                        </div>
	                                      </div>
	                                    </div>                                                                 
                                  </div>
                                </div>
                              </div>

                              <div class="clearfix"></div>

                            </div>
                        </div>       
                      </div> 
                      <div class="col-md-5">
                        <h3>Pemohon</h3>
                        <table class="table table-basic">
                          <tr>
                            <th>Pemohon:</th>
                            <td>{{$data->nama}}</td>
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
                            <th>Tanggal:</th>
                            <td>{{$data->tanggal}}</td>
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
                            <th>Kabupaten:</th>
                            <td>BULUKUMBA</td>
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
                        <!-- Button trigger modal -->

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                          Berkas
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                  <div class="row">
                                    <div class="col-md-8">
                                      <div class="container"  style="display: flex;">
                                        </div>
                                        @foreach($file as $f)
                                        <div class="card" style="width: 18rem; margin-left: 50px;">
                                          <img class="card-img-top" src="{{asset('files/'.'/'.$f->filename)}}" alt="Card image cap" style="max-width: 150px;">
                                          <div class="card-body" style="display: flex;margin-top: 10px;">
                                            <button type="button" class="btn btn-success btn-xs">Lengkap</button>
                                            <button type="button" class="btn btn-success btn-xs bg-red" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Kurang</button>
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
                                
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>                                         
                      </div>                     
                    </div>
                    <hr>
              <form method="POST" action="{{route('gabungvalidasi',$data->id)}}">@method('PUT') @csrf
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
	          </form>
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