@extends('layouts.super')
@section('content')
          <div class="">
<div class="clearfix"></div>
	<div class="row">
	  <div class="col-md-12 col-sm-12 col-xs-12">
	    <div class="x_panel">
	      <div class="x_title">
	        <h2>Permintaan Gabung<small>Users</small></h2>
	        <div class="clearfix"></div>
	      </div>
	      <div class="x_content">
	        <table id="datatable" class="table table-striped table-bordered">
	          <thead>
	            <tr>
	              <th>NO.pelayanan</th>
	              <th>Pemohon</th>                          
	              <th>Kecamatan</th>
	              <th>Kelurahan</th>
	              <th>N O P</th>
	              <th>Aksi</th>
	            </tr>
	          </thead>
	          <tbody>
	          	@foreach($data as $d1)
	            <tr>
	              <td>{{ $d1->nopel }}</td>
	              <td>{{$d1->nama}}</td>
	              <td>{{$d1->kecematan}}</td>
	              <td>{{$d1->kelurahan}}</td>
	              <td>{{$d1->nop}}</td>
	              <td class="text-center">
	                <div class="btn-group btn-group-sm" style="display:inline-flex">
	                  <a href="{{route('gabung.detail', $d1->id)}}" class="btn btn-success btn_detail" title="Detail"><i class='fa fa-list'></i></a>
	                </div>
	              </td>                          
	            </tr>
	            @endforeach       
	          </tbody>
	        </table>
	        {{$data->links()}}
	      </div>
	    </div>
	  </div>                      
	</div>
</div>
@stop