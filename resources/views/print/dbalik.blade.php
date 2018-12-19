<!DOCTYPE html>
<html>
<head>
	<title></title>
    <!-- Bootstrap -->
    <link href="{{asset("vendors/bootstrap/dist/css/bootstrap.min.css")}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset("css/table.css")}}">
</head>
<body>
	<div class="container">
		<b><p align="center" style="font-size: 20px;">DAFTAR PERUBAHAN OBJEK DAN SUBJEK PAJAK BUMI DAN BANGUNAN </p></b>
			<center><b><p>KABUPATEN/KOTA: BULUKUMBA</p></b></center>
			<center><b><p>KECAMATAN: {{$data->kecematan}}</p></b></center>
			<center><b><p>KELURAHAN/DESA: {{$data->kelurahan}}</p></b></center>
		<p>No pelayanan&nbsp;: {{$data->nopel}}</p>
		<p>Tanggal: {{$data->tanggalselesai}}</p>

		<table>
			<tr>
				<th class="nomor" rowspan="3"><b>NO</b></th>
				<th colspan="6"><b><center> DATA LAMA</center></b></th>
				<th colspan="6"><b><center>DATA BARU</center></b></th>
				<th rowspan="3"><b><center>KETERANGAN</center></b></th>
			</tr>

			<tr>
				<th rowspan="2"><b><center>NOP</center></b></th>
				<th rowspan="2"><b><center>NAMA / ALAMAT</center></b></th>
				<th colspan="2"><b><center>BUMI</center></b></th>
				<th colspan="2"><b><center>BANGUNAN</center></b></th>
				<th rowspan="2"><b><center>NOP</center></b></th>
				<th rowspan="2"><b><center>NAMA / ALAMAT</center></b></th>
				<th colspan="2"><b><center>BUMI</center></b></th>
				<th colspan="2"><b><center>BANGUNAN</center></b></th>
			</tr>
			<tr>
				<th><b><center>LUAS</center></b></th>
				<th><b><center>KELAS</center></b></th>
				<th><b><center>LUAS</center></b></th>
				<th><b><center>KELAS</center></b></th>
				<th><b><center>LUAS</center></b></th>
				<th><b><center>KELAS</center></b></th>
				<th><b><center>LUAS</center></b></th>
				<th><b><center>KELAS</center></b></th>
			</tr>
			<tr>
				<th class="no"><center>1</center></th>
				<th class="no"><center>2</center></th>
				<th class="no"><center>3</center></th>
				<th class="no"><center>4</center></th>
				<th class="no"></th>
				<th class="no"><center>5</center></th>
				<th class="no"><center></th>
				<th class="no"><center>6</center></th>
				<th class="no"><center>7</center></th>
				<th class="no"><center>8</center></th>
				<th class="no"><center>9</center></th>
				<th class="no"><center>10</center></th>
				<th class="no"><center>11</center></th>
				<th class="no"><center>12</center></th>
			</tr>
			<tr>
				<td class="isi">1</td>
				<td class="isi">{{$data->nop}}</td>
				<td class="isi">{{$data->nama}}</td>
				<td class="isi"><center>{{$data->luastanah}}</center></td>
				<td class="isi"><center>{{$data->kelastanah}}</center></td>
				<td class="isi"><center>{{$data->luasbangun}}</center></td>
				<td class="isi"><center>{{$data->kelasbangun}}</center></td>
				<td class="isi">{{$data->nop}}</td>
				<td class="isi">{{$data->pemohon}}</td>
				<td class="isi"><center>{{$data->luastanah}}</center></td>
				<td class="isi"><center>{{$data->kelastanah}}</center></td>
				<td class="isi"><center>{{$data->luasbangun}}</center></td>
				<td class="isi"><center>{{$data->kelasbangun}}</center></td>
				<td class="isi">Mutasi Seluruhnya</td>
			</tr>
		</table>	
		<br>
        <div class="row judul">
            <!-- <div class="col-sm-6"></div> -->
            <div class="col-sm-12">
                <br>
                <h6 style="float:left; margin-left: 20%;">Di periksa </h6>
                <h6 class="tanggal">Bululumba, {{$data->tanggalterima}}</h6>
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


    <!-- Bootstrap -->
    <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>