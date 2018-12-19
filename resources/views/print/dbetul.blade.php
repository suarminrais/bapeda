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
		<b><p align="center">DAFTAR HASIL PEMBETULAN PBB SECARA INDIVIDU</p></b>
		<p>Desa/Kelurahan: {{$data->kelurahan}}</p>
		<p>Kecamatan: {{$data->kecematan}}</p>
		<p>Kabupaten/Kota: BULUKUMBA</p>
		<p>Tahun Pajak: {{$data->tahunpbb}}</p>

		<table>
			<tr>
				<th rowspan="2"><center>No</center></th>
				<th colspan="2"><center>Wajib Pajak</center></th>
				<th colspan="2"><center>Objek Pajak</center></th>
				<th rowspan="2"><center>Permohonan Pembetulan</center></th>
				<th rowspan="2" width="200px"><center>Hasil Penelitian</center></th>
				<th rowspan="2" width="100px"><center>Kesimpulan dan Usul</center></th>
			</tr>
			<tr>
				<th width="200px"><center>Nama</center></th>
				<th><center>Alamat</center></th>
				<th width="200px"><center>NOP</center></th>
				<th><center>Alamat</center></th>
			</tr>
			<tr>
				<td class="no"><center>1</center></td>
				<td class="no"><center>2</center></td>
				<td class="no"><center>3</center></td>
				<td class="no"><center>4</center></td>
				<td class="no"><center>5</center></td>
				<td class="no"><center>6</center></td>
				<td class="no"><center>7</center></td>
				<td class="no"><center>8</center></td>
			</tr>
			<tr>
				<td class="isi" style="padding-top: -200px;"><center>1</center></td>
				<td class="isi">{{$data->pemohon}}</td>
				<td class="isi">{{$data->alamat}}</td>
				<td class="isi">{{$data->nop}}</td>
				<td class="isi">{{$data->alamat}}</td>
				<td class="isi">Pembetulan Nama Objek Pajak</td>
				<td class="isi">Berdasarkan hasil penelitian kantor atas permohonan PEMBETULAN KELAS BANGUNAN pajak dengan emperhatikan luas pasa SURAT KETERANGAN maka permohonan perbaikan objek pajak dapat diproses lebih lanjut.</td>	
				<td class="isi">Permohonan pembetulan diteruskan ke Sub Bidang Pengolahan Data untuk diproses lebih lanjut.</td>
			</tr>
		</table>
	</div>
    <!-- Bootstrap -->
    <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>