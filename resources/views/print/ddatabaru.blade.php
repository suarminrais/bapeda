
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
</head>
<body>
	<div class="container">
		<b><p align="center" style="font-size: 20px;">DAFTAR OBJEK DAN SUBJEK PAJAK BARU PBB</p></b>
			<center><b><p>KABUPATEN/KOTA: BULUKUMBA</p></b></center>
			<center><b><p>KECAMATAN: {{$data->kecematan}}</p></b></center>
			<center><b><p>KELURAHAN/DESA: {{$data->kelurahan}}</p></b></center>
		<p>No pelayanan&nbsp;: {{$data->nopel}}</p>
		<p>Tanggal: {{$data->tanggal}}</p>

		<table>
			<tr>
				<th class="nomor" rowspan="3"><b>NO</b></th>
				<th colspan="6"><center><b>DATA BARU</b></center></th>
				<th class="ket" rowspan="3"><b>KETERANGAN</b></th>
			</tr>
			<tr>
				<th class="nop" rowspan="2"><center><b>NOP</b></center></th>
				<th class="nama" rowspan="2"><center><b>NAMA/ALAMAT</b></center></th>
				<th class="bumi" colspan="2"><center><b>BUMI</b></center></th>
				<th class="bangunan" colspan="2"><center><b>BANGUNAN</b></center></th>
			</tr>
			<tr>
				<th><center><b>Luas</b></center></th>
				<th><center><b>ZNT</b></center></th>
				<th><center><b>Luas</b></center></th>
				<th><center><b>ZNT</b></center></th>
			</tr>
			<tr>
				<td class="no"></td>
				<td class="no"><center>6</center></td>
				<td class="no"><center>7</center></td>
				<td class="no"></td>
				<td class="no"><center>8</center></td>
				<td class="no"></td>
				<td class="no"><center>9</center></td>
				<td class="no"></td>
			</tr>
			<tr>
				<td class="isi">1</td>
				<td class="isi"><center> {{$data->nop}}</center></td>
				<td class="isi"><center>{{$data->pemohon}}</center></td>
				<td class="isi"><center>{{$data->luastanah}}</center></td>
				<td class="isi"><center>{{$data->kelastanah}}</center></td>
				<td class="isi"><center>{{$data->luasbangun}}</center></td>
				<td class="isi"><center>{{$data->kelasbangun}}</center></td>
				<td class="isi">Data baru 1 OP</td>
			</tr>
		</table>

		<br>
        <div class="row">
            <!-- <div class="col-sm-6"></div> -->
            <div class="col-sm-12">
                <br>
                <h6 style="float:left; margin-left: 20%;">Di periksa </h6>
                <h6 class="tanggal">Bululumba, {{$data->tanggal}}</h6>
                <h5 style="margin-left: 20%; float: left;">Kapala Sub Bidang Pendataan dan Pendaftaran <br>
                	<img src="{{asset('ttd/ttd.png')}}" height="50px" style="padding-left: 50px;">
                	<br>
                    <b><u>ADI CAHYADI SYARIF, S.SOS.</u></b> <br>
                    NIP. 19790517 200801 1 017
                </h5>
                <h5 class="tanggal"><i>Petugas Peneliti</i> <br>
                	<img src="{{asset('ttd/ttd.png')}}" height="50px" style="padding-left: 50px;">
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
                	<img src="{{asset('ttd/ttd.png')}}" height="50px" style="padding-left: 50px;">
                	<br>
                    <b><u>ANDI HERDY ARIFFUDDIN, S.STP</u></b> <br>
                    Pangkat : Penata TKI <br>
                    NIP. 19790424 199912 1 002
                </h5>
            </div>
        </div>
	</div>
    <!-- Bootstrap -->
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
</body>
</html>
