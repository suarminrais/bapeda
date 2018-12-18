@extends('layouts.admin')

@section('content')
<div class="">
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
                          <th>Tanggal terima</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>2018.0012.103</td>
                          <td>JEMMI</td>
                          <td>27/10/2018</td>
                          <td>
                            <div class="btn-group btn-group-sm" style="display:inline-flex">
                              <a href="Udetail.html" class="btn btn-primary btn_detail" title="Balik nama"><i class='fa fa-refresh'></i></a>
                            </div>
                            <div class="btn-group btn-group-sm" style="display:inline-flex">
                              <a href="Udetail.html" class="btn btn-success btn_detail" title="Pembetulan"><i class='fa fa-pencil'></i></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>2018.0012.103</td>
                          <td>JEMMI</td>
                          <td>27/10/2018</td>
                          <td>
                            <div class="btn-group btn-group-sm" style="display:inline-flex">
                              <a href="Udetail.html" class="btn btn-primary btn_detail" title="Balik nama"><i class='fa fa-refresh'></i></a>
                            </div>
                            <div class="btn-group btn-group-sm" style="display:inline-flex">
                              <a href="Udetail.html" class="btn btn-success btn_detail" title="Pembetulan"><i class='fa fa-pencil'></i></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>2018.0012.103</td>
                          <td>JEMMI</td>
                          <td>27/10/2018</td>
                          <td>
                            <div class="btn-group btn-group-sm" style="display:inline-flex">
                              <a href="Udetail.html" class="btn btn-primary btn_detail" title="Balik nama"><i class='fa fa-refresh'></i></a>
                            </div>
                            <div class="btn-group btn-group-sm" style="display:inline-flex">
                              <a href="Udetail.html" class="btn btn-success btn_detail" title="Pembetulan"><i class='fa fa-pencil'></i></a>
                            </div>
                          </td>
                        </tr>
                        @for($leng=1; $leng<100; $leng++)
                        <tr>
                          <td>2018.0012.103</td>
                          <td>JEMMI</td>
                          <td>27/10/2018</td>
                          <td>
                            <div class="btn-group btn-group-sm" style="display:inline-flex">
                              <a href="Udetail.html" class="btn btn-primary btn_detail" title="Balik nama"><i class='fa fa-refresh'></i></a>
                            </div>
                            <div class="btn-group btn-group-sm" style="display:inline-flex">
                              <a href="Udetail.html" class="btn btn-success btn_detail" title="Pembetulan"><i class='fa fa-pencil'></i></a>
                            </div>
                          </td>
                        </tr>
                        @endfor
                        <tr>
                          <td>2018.0012.103</td>
                          <td>JEMMI</td>
                          <td>27/10/2018</td>
                          <td>
                            <div class="btn-group btn-group-sm" style="display:inline-flex">
                              <a href="Udetail.html" class="btn btn-primary btn_detail" title="Balik nama"><i class='fa fa-refresh'></i></a>
                            </div>
                            <div class="btn-group btn-group-sm" style="display:inline-flex">
                              <a href="Udetail.html" class="btn btn-success btn_detail" title="Pembetulan"><i class='fa fa-pencil'></i></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>2018.0012.103</td>
                          <td>JEMMI</td>
                          <td>27/10/2018</td>
                          <td>
                            <div class="btn-group btn-group-sm" style="display:inline-flex">
                              <a href="Udetail.html" class="btn btn-primary btn_detail" title="Balik nama"><i class='fa fa-refresh'></i></a>
                            </div>
                            <div class="btn-group btn-group-sm" style="display:inline-flex">
                              <a href="Udetail.html" class="btn btn-success btn_detail" title="Pembetulan"><i class='fa fa-pencil'></i></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>2018.0012.103</td>
                          <td>JEMMI</td>
                          <td>27/10/2018</td>
                          <td>
                            <div class="btn-group btn-group-sm" style="display:inline-flex">
                              <a href="Udetail.html" class="btn btn-primary btn_detail" title="Balik nama"><i class='fa fa-refresh'></i></a>
                            </div>
                            <div class="btn-group btn-group-sm" style="display:inline-flex">
                              <a href="Udetail.html" class="btn btn-success btn_detail" title="Pembetulan"><i class='fa fa-pencil'></i></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>2018.0012.103</td>
                          <td>JEMMI</td>
                          <td>27/10/2018</td>
                          <td>
                            <div class="btn-group btn-group-sm" style="display:inline-flex">
                              <a href="Udetail.html" class="btn btn-primary btn_detail" title="Balik nama"><i class='fa fa-refresh'></i></a>
                            </div>
                            <div class="btn-group btn-group-sm" style="display:inline-flex">
                              <a href="Udetail.html" class="btn btn-success btn_detail" title="Pembetulan"><i class='fa fa-pencil'></i></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>2018.0012.103</td>
                          <td>JEMMI</td>
                          <td>27/10/2018</td>
                          <td>
                            <div class="btn-group btn-group-sm" style="display:inline-flex">
                              <a href="Udetail.html" class="btn btn-primary btn_detail" title="Balik nama"><i class='fa fa-refresh'></i></a>
                            </div>
                            <div class="btn-group btn-group-sm" style="display:inline-flex">
                              <a href="Udetail.html" class="btn btn-success btn_detail" title="Pembetulan"><i class='fa fa-pencil'></i></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>2018.0012.103</td>
                          <td>JEMMI</td>
                          <td>27/10/2018</td>
                          <td>
                            <div class="btn-group btn-group-sm" style="display:inline-flex">
                              <a href="Udetail.html" class="btn btn-primary btn_detail" title="Balik nama"><i class='fa fa-refresh'></i></a>
                            </div>
                            <div class="btn-group btn-group-sm" style="display:inline-flex">
                              <a href="Udetail.html" class="btn btn-success btn_detail" title="Pembetulan"><i class='fa fa-pencil'></i></a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          </div>
@endsection
@section('js')
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