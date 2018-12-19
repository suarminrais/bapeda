<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Draft Pemecahan</title>
    <!-- Bootstrap -->
    <link href="{{asset("vendors/bootstrap/dist/css/bootstrap.min.css")}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <style>
        .container{
            margin-top: 2%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <center><h5><b>DAFTAR PERUBAHAN OBJEK DAN SUBJEK PAJAK  BUMI DAN BANGUNAN</b></h5></center>
                <center><h5><b>KABUPATEN: BULUKUMBA</b></h5></center>
                <center><h5><b>KECAMATAN: {{$data->kecematan}}</b></h5></center>
                <center><h5><b>KELURAHAN/DESA: {{$data->kelurahan}}</b></h5></center>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h5>No Pelayanan : {{$data->nopel}}</h5>
                <h5>Tanggal : {{$data->tanggal}}</h5>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">NOP</th>
                        <th rowspan="2">Nama Alamat</th>
                        <th colspan="2"><center>BUMI</center></th>
                        <th colspan="2">BANGUNAN</th>
                        <th rowspan="2">NOP</th>
                        <th rowspan="2">Nama Alamat</th>
                        <th colspan="2"><center>BUMI</center></th>
                        <th colspan="2">BANGUNAN</th>
                        <th rowspan="2">KET.</th>                          
                    </tr>
                    <tr>
                        <th>Luas</th>
                        <th>Kelas</th>
                        <th>Luas</th>
                        <th>Kelas</th>
                        <th>Luas</th>
                        <th>Kelas</th>
                        <th>Luas</th>
                        <th>Kelas</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>{{$data->nop}}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->luastanah}}</td>
                        <td>{{$data->kelastanah}}</td>
                        <td>0</td>
                        <td>0</td>
                        <td>{{$data->nop}}</td>
                        <td>{{$data->pemohon_1}}</td>
                        <td>{{$data->kelas_1}}</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>Mutasi {{$data->jumlah}}OP</td>                          
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>73.02.030.003.005.0136.0</td>
                        <td>BAJI UPA BT BASO A'LA</td>
                        <td>90</td>
                        <td>0</td>
                        <td>54</td>
                        <td>028</td>
                        <td>73.02.030.003.005.0136.0</td>
                        <td>HENNY HANDAYANI</td>
                        <td>90</td>
                        <td>0</td>
                        <td>085</td>
                        <td>0</td> 
                        <td>-</td>  
                      </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-sm-6"></div> -->
            <div class="col-sm-12">
                <br>
                <h6 style="float:left; margin-left: 20%;">Di periksa </h6>
                <h6 class="tanggal">Bululumba, {{$data->tanggal}}</h6>
                <h5 style="margin-left: 20%; float: left;">Kapala Sub Bidang Pendataan dan Pendaftaran <br>
                    <img src="{{asset("ttd/ttd.png")}}" height="50px" style="padding-left: 50px;">
                    <br>
                    <b><u>ADI CAHYADI SYARIF, S.SOS.</u></b> <br>
                    NIP. 19790517 200801 1 017
                </h5>
                <h5 class="tanggal"><i>Petugas Peneliti</i> <br>
                    <img src="{{asset("ttd/ttd.png")}}" height="50px" style="padding-left: 50px;">
                    <br>
                    <b><u>ANDI NURHIDAYAT, SE.</u></b> <br>
                    NIP. 19860315 200902 1 006
                </h5> 
            </div>
        </div>
        <div class="row" align="center" style="margin-top:4%;">
            <div class="col-sm-12">
                <p align="center">Mengetahui, <br>KABID PENDATAAN, PENDAFTARAN <br> DAN PENGEMBANG POTENSI</p>
                <h5> <br>
                    <img src="{{asset("ttd/ttd.png")}}" height="50px" style="padding-left: 50px;">
                    <br>
                    <b><u>ANDI HERDY ARIFFUDDIN, S.STP</u></b> <br>
                    Pangkat : Penata TKI <br>
                    NIP. 19790424 199912 1 002
                </h5>
            </div>
        </div>
    </div>
</body>
</html>