@extends('layouts.admin')

@section('content')
<div id="app" class="">
  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Tabel data</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No. Pelayanan</th>
                <th>Nama pemohon</th>
                <th>Tanggal</th>
                <th>Ket. Data</th>
                <th class="success">Status Scan</th>
                <th>Status Validasi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $d)
              <tr>
                <td>{{$d->nopel}}</td>
                <td>{{$d->pemohon}}</td>
                <td>{{$d->tanggal}}</td>
                <td>DATA BARU</td>
                <td>{{$d->status}}</td>
                <td class="success">{{$d->validasi}}</td>
                @if($d->validasi!='-')
                <td>
                  <div class="btn-group btn-group-sm" style="display:inline-flex">
                    <a href="{{ route('databaruprint',$d->id) }}" class="btn btn-primary btn_detail" title="DRAFF"><i class='fa fa-refresh'></i></a>
                  </div>
                  <div class="btn-group btn-group-sm" style="display:inline-flex">
                    <a href="{{ route('databaruprinti',$d->id) }}" class="btn btn-success btn_detail" title="ISI"><i class='fa fa-pencil'></i></a>
                  </div>
                </td>
                @else
                <td>Masih Dalam Proses</td>
                @endif
              </tr>
              @endforeach
              @foreach($set as $d)
              <tr>
                <td>{{$d->nopel}}</td>
                <td>{{$d->nama}}</td>
                <td>{{$d->tanggal}}</td>
                <td>MUTASI PECAH</td>
                <td>{{$d->status}}</td>
                <td class="success">{{$d->validasi}}</td>
                @if($d->validasi!='-')
                <td>
                  <div class="btn-group btn-group-sm" style="display:inline-flex">
                    <a href="{{ route('pecahprint',$d->id) }}" class="btn btn-primary btn_detail" title="DRAFF"><i class='fa fa-refresh'></i></a>
                  </div>
                  <div class="btn-group btn-group-sm" style="display:inline-flex">
                    <a href="{{ route('pecahprinti',$d->id) }}" class="btn btn-success btn_detail" title="ISI"><i class='fa fa-pencil'></i></a>
                  </div>
                </td>
                @else
                <td>Masih Dalam Proses</td>
                @endif
              </tr>
              @endforeach
              @foreach($let as $d)
              <tr>
                <td>{{$d->nopel}}</td>
                <td>{{$d->nama}}</td>
                <td>{{$d->tanggal}}</td>
                <td>MUTASI GABUNG</td>
                <td>{{$d->status}}</td>
                <td class="success">{{$d->validasi}}</td>
                @if($d->validasi!='-')
                <td>
                  <div class="btn-group btn-group-sm" style="display:inline-flex">
                    <a href="{{ route('gabungprint',$d->id) }}" class="btn btn-primary btn_detail" title="DRAFF"><i class='fa fa-refresh'></i></a>
                  </div>
                  <div class="btn-group btn-group-sm" style="display:inline-flex">
                    <a href="{{ route('gabungprinti',$d->id) }}" class="btn btn-success btn_detail" title="ISI"><i class='fa fa-pencil'></i></a>
                  </div>
                </td>
                @else
                <td>Masih Dalam Proses</td>
                @endif
              </tr>
              @endforeach
              @foreach($jet as $d)
              <tr>
                <td>{{$d->nopel}}</td>
                <td>{{$d->pemohon}}</td>
                <td>{{$d->tanggalterima}}</td>
                <td>BALIK NAMA</td>
                <td>{{$d->status}}</td>
                <td class="success">{{$d->validasi}}</td>
                @if($d->validasi!='-')
                <td>
                  <div class="btn-group btn-group-sm" style="display:inline-flex">
                    <a href="{{ route('balikprint',$d->id) }}" class="btn btn-primary btn_detail" title="DRAFF"><i class='fa fa-refresh'></i></a>
                  </div>
                  <div class="btn-group btn-group-sm" style="display:inline-flex">
                    <a href="{{ route('balikprinti',$d->id) }}" class="btn btn-success btn_detail" title="ISI"><i class='fa fa-pencil'></i></a>
                  </div>
                </td>
                @else
                <td>Masih Dalam Proses</td>
                @endif
              </tr>
              @endforeach
              @foreach($bet as $d)
              <tr>
                <td>{{$d->nopel}}</td>
                <td>{{$d->pemohon}}</td>
                <td>{{$d->tanggal}}</td>
                <td>PEMBETULAN</td>
                <td>{{$d->status}}</td>
                <td class="success">{{$d->validasi}}</td>
                @if($d->validasi!='-')
                <td>
                  <div class="btn-group btn-group-sm" style="display:inline-flex">
                    <a href="{{ route('betulprint',$d->id) }}" class="btn btn-primary btn_detail" title="DRAFF"><i class='fa fa-refresh'></i></a>
                  </div>
                  <div class="btn-group btn-group-sm" style="display:inline-flex">
                    <a href="{{ route('betulprinti',$d->id) }}" class="btn btn-success btn_detail" title="ISI"><i class='fa fa-pencil'></i></a>
                  </div>
                </td>
                @else
                <td>Masih Dalam Proses</td>
                @endif
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
{{-- <script src="{{asset('js/vue.js')}}"></script>
<script>
  var app = new Vue({
    el: '#app',
    data: {
      lihat:false,
      valid:''
    },
    computed:{
      validasi : function(){
        if(this.valid=='DIKERJAKAN') return this.lihat=true
      }
    }
  })
</script> --}}
<script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
<script src="{{asset('vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>
@stop