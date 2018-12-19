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
                <img src="{{asset("images/logo.png")}}" width="80" height="80" alt="">
                <center><h4>PEMERINTAH KABUPATEN BULUKUMBA</h4></center>
                <center><h4><b>BADAN PENDAPATAN DAERAH</b></h4></center>
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
                <center><h5> <u>URAIAN PENELITIAN BERKAS PERMOHONAN MUTASI  SPPT PBB</u> </h5></center>
                <center><h6><b>NOMOR: </b></h6></center>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-8">
                <ol type="I">
                    <li>Identitas Pemohon: </li>
                        <h6>Nama : {{$data->nama}}</h6>
                        <h6>Alamat : KEL/DESA. {{$data->kelurahan}} KEC. {{$data->kecematan}} KAB. BULUKUMBA</h6>
                        <h6>No. Pelayanan : <b>{{$data->nopel}}</b></h6>
                    <li>Dasar Hukum / SOP
                        <ol>
                            <li>Undang-Undang No.28 Tahun 2009 tentang Pajak Daerah dan Retribusi Daerah</li>
                            <li>Peraturan Daerah Kab. Bulukumba Nomor 2 Tahun 2013 Tentang Pajak Bumi dan Bangunan Perdesaan dan Perkotaan sebagaimana telah diubah dengan Peraturan Daerah Kab.Bulukumba Nomor 6 Tahun 2016 tentang Perubahan Atas Peraturan Daerah Nomor 2 Tahun 2013 tentang Pajak Bumi dan Bangunan Perdesaan dan Perkotaan.</li>
                            <li>Peraturan Bupati Nomor 26 Tahun 2013 tentang Tata Cara Pemungutan Pajak Bumi dan Bangunan Perdesaan dan Perkotaan di Kabupaten Bulukumba</li>
                        </ol>
                    </li>
                    <li>Uraian Penelitian</li>
                    <h6>Berdasarkan surat permohonan mutasi dari wajib pajak, diperoleh informasi bahwa SPPT PBB sebagaimana daftar terlampir telah memenuhi ketentuan formal. Wajib pajak juga melampirkan persyaratan sebagai berikut :</h6>
                        <div class="an" style="display: flex">
                        <div class="div1">&nbsp;&nbsp;x</div><h6>&nbsp;Permohonan Wajib Pajak</h6>
                        <div class="anu" style="display: flex">
                            <div class="div1">&nbsp;&nbsp;x</div><h6>&nbsp;SPOP / LSOP</h6>
                        </div>
                        </div>
                        <div class="an" style="display: flex">
                            <div class="div1">&nbsp;&nbsp;x</div><h6 style="padding-right:10px;">&nbsp;&nbsp;SPPT PBB Tahun {{$data->tahunpbb}}</h6>
                            <div class="anu" style="display: flex">
                                <div class="div1">&nbsp;&nbsp;x</div><h6>&nbsp;Fc Sertifikat Tanah / Akta Jual Beli</h6>
                            </div>
                        </div>
                        <div class="an" style="display: flex">
                            <div class="div1">&nbsp;&nbsp;x</div><h6>&nbsp;Fc KTP</h6>  
                        </div>
                    <li>Kesimpulan</li>
                    <h6>Permohonan mutasi penggabungan {{$data->jumlah}} OP diteruskan ke Sub Bidang  Pengolahan Data   untuk diproses lebih lanjut. <br> <center>Demikian disampaikan untuk dapat dipergunakan seperlunya.</h6>
                </ol>
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-sm-6"></div> -->
            <div class="col-sm-8" style="margin-top: -15px;">
                <br>
                <h6 class="tanggal">Bululumba, {{$data->tanggal}}</h6>
                <h6 style="margin-left: 5%; float: left;">Kasubid Pendataan dan Pendaftaran <br>
                    <img src="{{asset('ttd/ttd.png')}}" height="50px" style="padding-left: 50px;">
                    <br>
                    <b><u>ADI CAHYADI SYARIF, S.SOS.</u></b> <br>
                    NIP. 12312332 09 900
                </h6>
                <h6 class="tanggal"><i>Petugas Peneliti</i> <br>
                    <img src="{{asset('ttd/ttd.png')}}" height="50px" style="padding-left: 50px;">
                    <br>
                    <b><u>ANDI NURHIDAYAT, SE.</u></b> <br>
                    NIP. 4634636 09 940
                </h6> 
            </div>
        </div>
        <div class="row" align="center" style="margin-top:4%;">
            <div class="col-sm-8">
                <p align="center">Mengetahui, <br>KABID PENDATAAN, PENDAFTARAN <br> DAN PENGEMBANG POTENSI</p>
                <h6>
                    <img src="{{asset('ttd/ttd.png')}}" height="50px" style="padding-left: 50px;">
                    <br>
                    <b><u>ADI CAHYADI SYARIF, S.Sos.</u></b> <br>
                    Pangkat : Penata TKI <br>
                    NIP. 12312332 09 900
                </h6>
            </div>
        </div>
    </div>

</body>
</html>