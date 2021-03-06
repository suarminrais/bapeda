@extends('layouts.user')

@section('content') 
<div class="">

  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Permintaan Pembetulan</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>NO.pelayanan</th>
                <th>Pemohon</th>                          
                <th>Tanggal</th>
                <th>Scan Data</th>
              </tr>
            </thead>


            <tbody>
              @foreach($data as $d)
              @if($d->validasi=='-')
              <tr>
                <td>{{ $d->nop }}</td>
                <td>{{ $d->pemohon }}</td>                         
                <td>{{ $d->tanggal }}</td>
                <td class="text-center"><a href="{{ route('scanbtl', $d->id) }}" class="btn btn-success">scan</a>
                </td>                          
              </tr>
              @endif
              @endforeach
            </tbody>
          </table>
          {{ $data->links()}}
        </div>
      </div>
    </div>                      
  </div>
</div>
@endsection