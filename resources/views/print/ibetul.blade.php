<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat</title>

    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    
    <!-- style -->
    <link rel="stylesheet" href="{{asset('css/table.css')}}">
</head>
<body>
    <!-- header -->
    <div class="container header">
        <div class="row">
            <div class="col-sm-8">
                <img src="{{asset("images/logo.png")}}" width="60" height="60" alt="">
                <center><h5><b>PEMERINTAH KABUPATEN BULUKUMBA</b></h5></center>
                <center><h5><b>BADAN PENDAPATAN DAERAH</b></h5></center>
                <center><h6>JL. Jendral Sudirman No. 03 Telp. (0413) 81002 Kode Pos 92511</h6></center>
                <!-- <img src="../images/logo.png" width="80" height="80" alt=""> -->
                <hr>
            </div>
        </div>
    </div>
    <!-- akhir header -->

    <!-- isi -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 judul">
                <center><h5><b>LAPORAN HASIL PENELITIAN PEMBETULAN PBB SECARA PERSEORANGAN</b></h5></center>
                <!-- <center><h5><b>PEMBETULAN PBB SECARA PERSEORANGAN</b></h5></center> -->
                <center><h6><b>Nomor:  </b></h6></center>
            </div>
        </div>

        <div class="row" style="font-size: 10px;">
            <div class="col-sm-8">        
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berdasarkan Berkas Pengajuan nomor {{$data->nopel}} tanggal {{$data->tanggal}} telah dilakukan penelitian yang dilaksanakan pada tanggal {{$data->tanggal}} sampai dengan tanggal {{$data->tanggal}} atas permohonan pembetulan PBB yang diajukan wajib pajak:</p>
                <div style="padding-left: 50px;">
                    <h6>Nama : {{$data->pemohon}}</h6>
                    <h6>Alamat : {{$data->alamat}}</h6>
                    <h6>No. Pelayanan : <b>{{$data->nopel}}</b></h6>
                </div>
                <p>melalui surat nomor 020/61/IX/2018 tanggal 26/09/2018 yang diterima Dinas Pengelolaan Keuangan Daerah Kab. Bulukumba berdasarkan tanda terima surat nomor 2018.0012.103 tanggal 27/10/2018, dengan uraian sebagai berikut: </p>
                <ol type="I">
                    <li  style="font-size: 10px;">UMUM
                        <div class="row">
                            <div class="col-md-8">
                                <ol>
                                    <li style="font-size: 10px;">NOP&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$data->nop}}</li>
                                    <li style="font-size: 10px;">Alamat objek pajak&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->alamat}}</li>
                                    <li style="font-size: 10px;">Tahun Pajak&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2018</li>
                                    <li style="font-size: 10px;">Jenis surat keputusan/ketetapan&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PBB</li>
                                    <li style="font-size: 10px;">Nomor surat keputusan/ketetapan&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$data->nop}}</li>
                                    <li style="font-size: 10px;">Tanggal surat keputusan/ketetapan&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$data->tanggal}}</li>
                                </ol> 
                            </div>
                            <div class="col-md-3">
                                <ul style="list-style-type: none;">
                                    <!-- <li>:73.02.020.002.004.0176.0</li> -->
                                    <!-- <li>:BENTENGNGE</li> -->
                                    <!-- <li>:2018</li> -->
                                    <!-- <li>:PBB</li> -->
                                    <!-- <li>:73.02.020.002.004.0176.0</li> -->
                                    <!-- <li>:27 September 2018</li> -->
                                </ul>
                            </div>
                        </div>
                    </li>
                    <br>
                    <li style="font-size: 10px;">DASAR HUKUM
                        <ol>
                            <li style="font-size: 10px;">Undang-Undang No.28 Tahun 2009 tentang Pajak Daerah dan Retribusi Daerah</li>
                            <li style="font-size: 10px;">Peraturan Daerah Kab. Bulukumba Nomor 2 Tahun 2013 Tentang Pajak Bumi dan Bangunan Perdesaan dan Perkotaan sebagaimana telah diubah dengan Peraturan Daerah Kab.Bulukumba Nomor 6 Tahun 2016 tentang Perubahan Atas Peraturan Daerah Nomor 2 Tahun 2013 tentang Pajak Bumi dan Bangunan Perdesaan dan Perkotaan.</li>
                            <li style="font-size: 10px;">Peraturan Bupati Nomor 26 Tahun 2013 tentang Tata Cara Pemungutan Pajak Bumi dan Bangunan Perdesaan dan Perkotaan di Kabupaten Bulukumba</li>
                        </ol>
                    </li>
                    <br>
                    <li style="font-size: 10px;">HASIL PENELITIAN</li>
                    <p>Berdasarkan hasil penelitian kantor atas permohonan PEMBETULAN KELAS BANGUNAN pajak dengan memperhatikan luas pada SURAT KETERANGAN maka permohonan perbaikan Objek Pajak dapat diproses lebih lanjut.</p>
                    <br>
                    <li style="font-size: 10px;">KESIMPULAN DAN USUL</li>
                    <h6>Permohonan penerbitan objek dan subjek pajak baru diteruskan ke Sub Bidang Pengolahan Data  untuk diproses lebih lanjut.<br> <center>Demikian disampaikan untuk dapat dipergunakan seperlunya.</h6>
                </ol>
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-sm-6"></div> -->
            <div class="col-sm-8 ttd">
                <br>
                <p class="tanggal" style="font-size: 10px;">Bulukumba, {{$data->tanggal}}</p>
                <p style="margin-left: 5%; float: left;font-size: 10px;">Kasubid Pendataan dan Pendaftaran <br>
                    <img src="{{asset('ttd/ttd.png')}}" height="35px" style="padding-left: 50px;"> 
                    <br>
                    <b><u>ADI CAHYADI SYARIF, S.SOS.</u></b> <br>
                    NIP. 12312332 09 900
                </p>
                <p class="tanggal" style="font-size: 10px;"><i>Petugas Peneliti</i> <br>
                    <img src="{{asset('ttd/ttd.png')}}" height="35px" style="padding-left: 50px;">
                    <br>
                    <b><u>ANDI NURHIDAYAT, SE.</u></b> <br>
                    NIP. 4634636 09 940
                </p> 
            </div>
        </div>
        <div class="row" align="center" style="margin-top:4%;">
            <div class="col-sm-8">
                <p align="center" style="font-size: 10px;">Mengetahui, <br>KABID PENDATAAN, PENDAFTARAN <br> DAN PENGEMBANG POTENSI</p>
                <p style="font-size: 10px;"> <br>
                    <!-- <img src="ttd.png" height="50px" style="padding-left: 50px;"> -->
                    <img src="{{asset('ttd/ttd.png')}}" height="35px" style="padding-left: 50px;">
                    <br>
                    <b><u>ADI CAHYADI SYARIF, S.Sos.</u></b> <br>
                    Pangkat : Penata TKI <br>
                    NIP. 12312332 09 900
                </p>
            </div>
        </div>
    </div>

</body>
</html>