<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use App\Upload;
use App\DataBaru;
use App\BalikNama;
use App\Pembetulan;
use App\MutasiPecah;
use App\GabungData;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $files_path;

    public function __construct()
    {
        $this->middleware('auth');
        $this->files_path = public_path('/files');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->hasRole('superadministrator'))
            return redirect()->route('super.index');
        else if (Auth::user()->hasRole('administrator')){
            $data = DataBaru::orderBy('id','desc')->paginate(50);
            $set = MutasiPecah::orderBy('id','desc')->paginate(50);
            $let = GabungData::orderBy('id','desc')->paginate(50);
            $jet = BalikNama::orderBy('id','desc')->paginate(50);
            $bet = Pembetulan::orderBy('id','desc')->paginate(50);

            return view('admin.home')->withData($data)->withSet($set)->withLet($let)->withJet($jet)->withBet($bet);   
        }
        else if (Auth::user()->hasRole('user'))
            return redirect()->route('scandb');
        else 
            return view('');   
    }

    public function getPembetulan()
    {
        return view('admin.pembetulan');
    }

    public function postPembetulan(Request $request)
    {
        $this->validate($request, array(
                'pemohon'         => 'required|max:255',
            ));
        $databaru = new Pembetulan();

        $databaru->pemohon = $request->pemohon;
        $databaru->nopel = $request->nopelayanan;
        $databaru->tanggal = $request->tanggal;
        $databaru->kecematan = $request->kecematan;
        $databaru->kelurahan = $request->kelurahan;
        $databaru->alamat = $request->alamat;
        $databaru->nop = $request->nop;
        $databaru->blok = $request->blok;


        $databaru->save();

        return redirect()->route('pembetulanarsip');
    }

    public function getPembetulanArsip()
    {
        $data = Pembetulan::orderBy('id','desc')->paginate(10);
        return view('admin.apembetulan')->withData($data);
    }

    public function getBalikNama()
    {
        return view('admin.baliknama');
    }

    public function postBalikNama(Request $request)
    {
        $this->validate($request, array(
                'pemohon'         => 'required|max:255',
            ));
        $databaru = new BalikNama();

        $databaru->nama = $request->nama;
        $databaru->pemohon = $request->pemohon;
        $databaru->nopel = $request->nopelayanan;
        $databaru->tanggalterima = $request->tanggalterima;
        $databaru->tanggalselesai = $request->tanggalselesai;
        $databaru->kecematan = $request->kecematan;
        $databaru->kelurahan = $request->kelurahan;
        $databaru->blok = $request->blok;
        $databaru->nop = $request->nop;
        $databaru->tahunpbb = $request->tahunsppt;
        $databaru->luasbangun = $request->luasbangun;
        $databaru->luastanah = $request->luastanah;
        $databaru->kelastanah = $request->kelastanah;
        $databaru->kelasbangun = $request->kelasbangun;


        $databaru->save();

        return redirect()->route('balikarsip');
    }

    public function getBalikNamaArsip()
    {
        $data = BalikNama::orderBy('id','desc')->paginate(10);
        return view('admin.abaliknama')->withData($data);
    }

    public function getDataBaru()
    {
        return view('admin.databaru');
    }

    public function getArsipData()
    {
        $data = DataBaru::orderBy('id','desc')->paginate(10);
        return view('admin.adatabaru')->withData($data);
    }

    public function getBetulPrint($id)
    {
        $data = Pembetulan::find($id);
        return view('print.dbetul')->withData($data);
    }

    public function getBetulPrinti($id)
    {
        $data = Pembetulan::find($id);
        return view('print.ibetul')->withData($data);
    }

    public function getBalikPrint($id)
    {
        $data = BalikNama::find($id);
        return view('print.dbalik')->withData($data);
    }

    public function getBalikPrinti($id)
    {
        $data = BalikNama::find($id);
        return view('print.ibalik')->withData($data);
    }

    public function getGabungPrint($id)
    {
        $data = GabungData::find($id);
        return view('print.dgabung')->withData($data);
    }

    public function getGabungPrinti($id)
    {
        $data = GabungData::find($id);
        return view('print.igabung')->withData($data);
    }

    public function getPecahPrint($id)
    {
        $data = MutasiPecah::find($id);
        return view('print.dpecah')->withData($data);
    }

    public function getPecahPrinti($id)
    {
        $data = MutasiPecah::find($id);
        return view('print.ipecah')->withData($data);
    }

    public function getDataBaruPrint($id)
    {
        $data = DataBaru::find($id);
        return view('print.ddatabaru')->withData($data);
    }

    public function getDataBaruPrinti($id)
    {
        $data = DataBaru::find($id);
        return view('print.idatabaru')->withData($data);
    }

    public function postDataBaru(Request $request)
    {
        $this->validate($request, array(
                'pemohon'         => 'required|max:255',
            ));
        $databaru = new DataBaru();

        $databaru->pemohon = $request->pemohon;
        $databaru->nopel = $request->nopelayanan;
        $databaru->noptetangga = $request->notetangga;
        $databaru->tanggal = $request->tanggal;
        $databaru->kecematan = $request->kecematan;
        $databaru->kelurahan = $request->kelurahan;
        $databaru->blok = $request->blok;
        $databaru->nop = $request->nop;
        $databaru->tahunpbb = $request->tahunsppt;
        $databaru->luasbangun = $request->luasbangun;
        $databaru->luastanah = $request->luastanah;
        $databaru->kelastanah = $request->kelastanah;
        $databaru->kelasbangun = $request->kelasbangun;

        $databaru->save();

        return redirect()->route('arsipdata');
    }

    public function getPecahBaru()
    {
        return view('admin.pecah');
    }
    public function postPecahBaru(Request $request)
    {
        $data =new MutasiPecah();
        
        $data->nama = $request->nama;
        $data->nopel = $request->nopelayanan;
        $data->tanggal = $request->tanggal;
        $data->kecematan = $request->kecematan;
        $data->kelurahan = $request->kelurahan;
        $data->blok = $request->blok;
        $data->nop = $request->nop;
        $data->tahunpbb = $request->tahunsppt;
        $data->jumlah = $request->jumlah;
       
        // $data->luasbangun = $request->luasbangun;
        $data->luastanah = $request->luastanah;
        // $data->kelasbangun = $request->kelasbangun;
        $data->kelastanah = $request->kelas;

        $data->pemohon_1 = $request->pemohon_1;
        $data->alamat_1 = $request->alamat_1;
        $data->kelas_1 = $request->kelas_1;
        $data->pemohon_2 = $request->pemohon_2;
        $data->alamat_2 = $request->alamat_2;
        $data->kelas_2 = $request->kelas_2;
        $data->pemohon_3 = $request->pemohon_3;
        $data->alamat_3 = $request->alamat_3;
        $data->kelas_3 = $request->kelas_3;
        $data->pemohon_4 = $request->pemohon_4;
        $data->alamat_4 = $request->alamat_4;
        $data->kelas_4 = $request->kelas_4;
        $data->pemohon_5 = $request->pemohon_5;
        $data->alamat_5 = $request->alamat_5;
        $data->kelas_5 = $request->kelas_5;
        $data->pemohon_6 = $request->pemohon_6;
        $data->alamat_6 = $request->alamat_6;
        $data->kelas_6 = $request->kelas_6;
        $data->pemohon_7 = $request->pemohon_7;
        $data->alamat_7 = $request->alamat_7;
        $data->kelas_7 = $request->kelas_7;
        $data->pemohon_8 = $request->pemohon_8;
        $data->alamat_8 = $request->alamat_8;
        $data->kelas_8 = $request->kelas_8;
        $data->pemohon_9 = $request->pemohon_9;
        $data->alamat_9 = $request->alamat_9;
        $data->kelas_9 = $request->kelas_9;
        $data->pemohon_10 = $request->pemohon_10;
        $data->alamat_10 = $request->alamat_10;
        $data->kelas_10 = $request->kelas_10;
        $data->pemohon_11 = $request->pemohon_11;
        $data->alamat_11 = $request->alamat_11;
        $data->kelas_11 = $request->kelas_11;
        $data->pemohon_12 = $request->pemohon_12;
        $data->alamat_12 = $request->alamat_12;
        $data->kelas_12 = $request->kelas_12;
        $data->pemohon_13 = $request->pemohon_13;
        $data->alamat_13 = $request->alamat_13;
        $data->kelas_13 = $request->kelas_13;
        $data->pemohon_14 = $request->pemohon_14;
        $data->alamat_14 = $request->alamat_14;
        $data->kelas_14 = $request->kelas_14;
        $data->pemohon_15 = $request->pemohon_15;
        $data->alamat_15 = $request->alamat_15;
        $data->kelas_15 = $request->kelas_15;
        $data->pemohon_16 = $request->pemohon_16;
        $data->alamat_16 = $request->alamat_16;
        $data->kelas_16 = $request->kelas_16;
        $data->pemohon_17 = $request->pemohon_17;
        $data->alamat_17 = $request->alamat_17;
        $data->kelas_17 = $request->kelas_17;
        $data->pemohon_18 = $request->pemohon_18;
        $data->alamat_18 = $request->alamat_18;
        $data->kelas_18 = $request->kelas_18;
        $data->pemohon_19 = $request->pemohon_19;
        $data->alamat_19 = $request->alamat_19;
        $data->kelas_19 = $request->kelas_19;
        $data->pemohon_20 = $request->pemohon_20;
        $data->alamat_20 = $request->alamat_20;
        $data->kelas_20 = $request->kelas_20;
        $data->pemohon_21 = $request->pemohon_21;
        $data->alamat_21 = $request->alamat_21;
        $data->kelas_21 = $request->kelas_21;
        $data->pemohon_22 = $request->pemohon_22;
        $data->alamat_22 = $request->alamat_22;
        $data->kelas_22 = $request->kelas_22;
        $data->pemohon_23 = $request->pemohon_23;
        $data->alamat_23 = $request->alamat_23;
        $data->kelas_23 = $request->kelas_23;
        $data->pemohon_24 = $request->pemohon_24;
        $data->alamat_24 = $request->alamat_24;
        $data->kelas_24 = $request->kelas_24;
        $data->pemohon_25 = $request->pemohon_25;
        $data->alamat_25 = $request->alamat_25;
        $data->kelas_25 = $request->kelas_25;
        $data->pemohon_26 = $request->pemohon_26;
        $data->alamat_26 = $request->alamat_26;
        $data->kelas_26 = $request->kelas_26;
        $data->pemohon_27 = $request->pemohon_27;
        $data->alamat_27 = $request->alamat_27;
        $data->kelas_27 = $request->kelas_27;
        $data->pemohon_28 = $request->pemohon_28;
        $data->alamat_28 = $request->alamat_28;
        $data->kelas_28 = $request->kelas_28;
        $data->pemohon_29 = $request->pemohon_29;
        $data->alamat_29 = $request->alamat_29;
        $data->kelas_29 = $request->kelas_29;
        $data->pemohon_30 = $request->pemohon_30;
        $data->alamat_30 = $request->alamat_30;
        $data->kelas_30 = $request->kelas_30;
        $data->pemohon_31 = $request->pemohon_31;
        $data->alamat_31 = $request->alamat_31;
        $data->kelas_31 = $request->kelas_31;
        $data->pemohon_32 = $request->pemohon_32;
        $data->alamat_32 = $request->alamat_32;
        $data->kelas_32 = $request->kelas_32;
        $data->pemohon_33 = $request->pemohon_33;
        $data->alamat_33 = $request->alamat_33;
        $data->kelas_33 = $request->kelas_33;
        $data->pemohon_34 = $request->pemohon_34;
        $data->alamat_34 = $request->alamat_34;
        $data->kelas_34 = $request->kelas_34;
        $data->pemohon_35 = $request->pemohon_35;
        $data->alamat_35 = $request->alamat_35;
        $data->kelas_35 = $request->kelas_35;
        $data->pemohon_36 = $request->pemohon_36;
        $data->alamat_36 = $request->alamat_36;
        $data->kelas_36 = $request->kelas_36;
        $data->pemohon_37 = $request->pemohon_37;
        $data->alamat_37 = $request->alamat_37;
        $data->kelas_37 = $request->kelas_37;
        $data->pemohon_38 = $request->pemohon_38;
        $data->alamat_38 = $request->alamat_38;
        $data->kelas_38 = $request->kelas_38;
        $data->pemohon_39 = $request->pemohon_39;
        $data->alamat_39 = $request->alamat_39;
        $data->kelas_39 = $request->kelas_39;
        $data->pemohon_40 = $request->pemohon_40;
        $data->alamat_40 = $request->alamat_40;
        $data->kelas_40 = $request->kelas_40;
        $data->pemohon_41 = $request->pemohon_41;
        $data->alamat_41 = $request->alamat_41;
        $data->kelas_41 = $request->kelas_41;
        $data->pemohon_42 = $request->pemohon_42;
        $data->alamat_42 = $request->alamat_42;
        $data->kelas_42 = $request->kelas_42;
        $data->pemohon_43 = $request->pemohon_43;
        $data->alamat_43 = $request->alamat_43;
        $data->kelas_43 = $request->kelas_43;
        $data->pemohon_44 = $request->pemohon_44;
        $data->alamat_44 = $request->alamat_44;
        $data->kelas_44 = $request->kelas_44;
        $data->pemohon_45 = $request->pemohon_45;
        $data->alamat_45 = $request->alamat_45;
        $data->kelas_45 = $request->kelas_45;
        $data->pemohon_46 = $request->pemohon_46;
        $data->alamat_46 = $request->alamat_46;
        $data->kelas_46 = $request->kelas_46;
        $data->pemohon_47 = $request->pemohon_47;
        $data->alamat_47 = $request->alamat_47;
        $data->kelas_47 = $request->kelas_47;
        $data->pemohon_48 = $request->pemohon_48;
        $data->alamat_48 = $request->alamat_48;
        $data->kelas_48 = $request->kelas_48;
        $data->pemohon_49 = $request->pemohon_49;
        $data->alamat_49 = $request->alamat_49;
        $data->kelas_49 = $request->kelas_49;
        $data->pemohon_50 = $request->pemohon_50;
        $data->alamat_50 = $request->alamat_50;
        $data->kelas_50 = $request->kelas_50;

        $data->save();
        return redirect()->route('pecaharsip');
    }

    public function getPecahArsip()
    {
        $data = MutasiPecah::orderBy('id','desc')->paginate(10);
        return view('admin.pecaharsip')->withData($data);
    }

    public function getGabungBaru()
    {
        return view('admin.gabungbaru');
    }

    public function postGabungBaru(Request $request)
    {   
        $data =new GabungData();
        
        $data->nama = $request->nama;
        $data->nopel = $request->nopelayanan;
        $data->tanggal = $request->tanggal;
        $data->kecematan = $request->kecematan;
        $data->kelurahan = $request->kelurahan;
        $data->blok = $request->blok;
        $data->nop = $request->nop;
        $data->tahunpbb = $request->tahunsppt;
        $data->jumlah = $request->jumlah;
        // $data->luasbangun = $request->luasbangun;
        $data->luastanah = $request->luastanah;
        // $data->kelasbangun = $request->kelasbangun;
        $data->kelastanah = $request->kelas;

        $data->pemohon_1 = $request->pemohon_1;
        $data->alamat_1 = $request->alamat_1;
        $data->kelas_1 = $request->kelas_1;
        $data->nop_1 = $request->nop_1;
        $data->pemohon_2 = $request->pemohon_2;
        $data->alamat_2 = $request->alamat_2;
        $data->kelas_2 = $request->kelas_2;
        $data->nop_2 = $request->nop_2;
        $data->pemohon_3 = $request->pemohon_3;
        $data->alamat_3 = $request->alamat_3;
        $data->kelas_3 = $request->kelas_3;
        $data->nop_3 = $request->nop_3;
        $data->pemohon_4 = $request->pemohon_4;
        $data->alamat_4 = $request->alamat_4;
        $data->kelas_4 = $request->kelas_4;
        $data->nop_4 = $request->nop_4;
        $data->pemohon_5 = $request->pemohon_5;
        $data->alamat_5 = $request->alamat_5;
        $data->kelas_5 = $request->kelas_5;
        $data->nop_5 = $request->nop_5;
        $data->pemohon_6 = $request->pemohon_6;
        $data->alamat_6 = $request->alamat_6;
        $data->kelas_6 = $request->kelas_6;
        $data->nop_6 = $request->nop_6;
        $data->pemohon_7 = $request->pemohon_7;
        $data->alamat_7 = $request->alamat_7;
        $data->kelas_7 = $request->kelas_7;
        $data->nop_7 = $request->nop_7;
        $data->pemohon_8 = $request->pemohon_8;
        $data->alamat_8 = $request->alamat_8;
        $data->kelas_8 = $request->kelas_8;
        $data->nop_8 = $request->nop_8;
        $data->pemohon_9 = $request->pemohon_9;
        $data->alamat_9 = $request->alamat_9;
        $data->kelas_9 = $request->kelas_9;
        $data->nop_9 = $request->nop_9;
        $data->pemohon_10 = $request->pemohon_10;
        $data->alamat_10 = $request->alamat_10;
        $data->kelas_10 = $request->kelas_10;
        $data->nop_10 = $request->nop_10;
        $data->pemohon_11 = $request->pemohon_11;
        $data->alamat_11 = $request->alamat_11;
        $data->kelas_11 = $request->kelas_11;
        $data->nop_11 = $request->nop_11;
        $data->pemohon_12 = $request->pemohon_12;
        $data->alamat_12 = $request->alamat_12;
        $data->kelas_12 = $request->kelas_12;
        $data->nop_12 = $request->nop_12;
        $data->pemohon_13 = $request->pemohon_13;
        $data->alamat_13 = $request->alamat_13;
        $data->kelas_13 = $request->kelas_13;
        $data->nop_13 = $request->nop_13;
        $data->pemohon_14 = $request->pemohon_14;
        $data->alamat_14 = $request->alamat_14;
        $data->kelas_14 = $request->kelas_14;
        $data->nop_14 = $request->nop_14;
        $data->pemohon_15 = $request->pemohon_15;
        $data->alamat_15 = $request->alamat_15;
        $data->kelas_15 = $request->kelas_15;
        $data->nop_15 = $request->nop_15;
        $data->pemohon_16 = $request->pemohon_16;
        $data->alamat_16 = $request->alamat_16;
        $data->kelas_16 = $request->kelas_16;
        $data->nop_16 = $request->nop_16;
        $data->pemohon_17 = $request->pemohon_17;
        $data->alamat_17 = $request->alamat_17;
        $data->kelas_17 = $request->kelas_17;
        $data->nop_17 = $request->nop_17;
        $data->pemohon_18 = $request->pemohon_18;
        $data->alamat_18 = $request->alamat_18;
        $data->kelas_18 = $request->kelas_18;
        $data->nop_18 = $request->nop_18;
        $data->pemohon_19 = $request->pemohon_19;
        $data->alamat_19 = $request->alamat_19;
        $data->kelas_19 = $request->kelas_19;
        $data->nop_19 = $request->nop_19;
        $data->pemohon_20 = $request->pemohon_20;
        $data->alamat_20 = $request->alamat_20;
        $data->kelas_20 = $request->kelas_20;
        $data->nop_20 = $request->nop_20;
        $data->pemohon_21 = $request->pemohon_21;
        $data->alamat_21 = $request->alamat_21;
        $data->kelas_21 = $request->kelas_21;
        $data->pemohon_22 = $request->pemohon_22;
        $data->alamat_22 = $request->alamat_22;
        $data->kelas_22 = $request->kelas_22;
        $data->nop_22 = $request->nop_22;
        $data->pemohon_23 = $request->pemohon_23;
        $data->alamat_23 = $request->alamat_23;
        $data->kelas_23 = $request->kelas_23;
        $data->nop_23 = $request->nop_23;
        $data->pemohon_24 = $request->pemohon_24;
        $data->alamat_24 = $request->alamat_24;
        $data->kelas_24 = $request->kelas_24;
        $data->nop_24 = $request->nop_24;
        $data->pemohon_25 = $request->pemohon_25;
        $data->alamat_25 = $request->alamat_25;
        $data->kelas_25 = $request->kelas_25;
        $data->nop_25 = $request->nop_25;
        $data->pemohon_26 = $request->pemohon_26;
        $data->alamat_26 = $request->alamat_26;
        $data->kelas_26 = $request->kelas_26;
        $data->nop_26 = $request->nop_26;
        $data->pemohon_27 = $request->pemohon_27;
        $data->alamat_27 = $request->alamat_27;
        $data->kelas_27 = $request->kelas_27;
        $data->nop_27 = $request->nop_27;
        $data->pemohon_28 = $request->pemohon_28;
        $data->alamat_28 = $request->alamat_28;
        $data->kelas_28 = $request->kelas_28;
        $data->nop_28 = $request->nop_28;
        $data->pemohon_29 = $request->pemohon_29;
        $data->alamat_29 = $request->alamat_29;
        $data->kelas_29 = $request->kelas_29;
        $data->nop_29 = $request->nop_29;
        $data->pemohon_30 = $request->pemohon_30;
        $data->alamat_30 = $request->alamat_30;
        $data->kelas_30 = $request->kelas_30;
        $data->nop_30 = $request->nop_30;
        $data->pemohon_31 = $request->pemohon_31;
        $data->alamat_31 = $request->alamat_31;
        $data->kelas_31 = $request->kelas_31;
        $data->nop_31 = $request->nop_31;
        $data->pemohon_32 = $request->pemohon_32;
        $data->alamat_32 = $request->alamat_32;
        $data->kelas_32 = $request->kelas_32;
        $data->nop_32 = $request->nop_32;
        $data->pemohon_33 = $request->pemohon_33;
        $data->alamat_33 = $request->alamat_33;
        $data->kelas_33 = $request->kelas_33;
        $data->nop_33 = $request->nop_33;
        $data->pemohon_34 = $request->pemohon_34;
        $data->alamat_34 = $request->alamat_34;
        $data->kelas_34 = $request->kelas_34;
        $data->nop_34 = $request->nop_34;
        $data->pemohon_35 = $request->pemohon_35;
        $data->alamat_35 = $request->alamat_35;
        $data->kelas_35 = $request->kelas_35;
        $data->nop_35 = $request->nop_35;
        $data->pemohon_36 = $request->pemohon_36;
        $data->alamat_36 = $request->alamat_36;
        $data->kelas_36 = $request->kelas_36;
        $data->nop_36 = $request->nop_36;
        $data->pemohon_37 = $request->pemohon_37;
        $data->alamat_37 = $request->alamat_37;
        $data->kelas_37 = $request->kelas_37;
        $data->nop_37 = $request->nop_37;
        $data->pemohon_38 = $request->pemohon_38;
        $data->alamat_38 = $request->alamat_38;
        $data->kelas_38 = $request->kelas_38;
        $data->nop_38 = $request->nop_38;
        $data->pemohon_39 = $request->pemohon_39;
        $data->alamat_39 = $request->alamat_39;
        $data->kelas_39 = $request->kelas_39;
        $data->nop_39 = $request->nop_39;
        $data->pemohon_40 = $request->pemohon_40;
        $data->alamat_40 = $request->alamat_40;
        $data->kelas_40 = $request->kelas_40;
        $data->nop_40 = $request->nop_40;
        $data->pemohon_41 = $request->pemohon_41;
        $data->alamat_41 = $request->alamat_41;
        $data->kelas_41 = $request->kelas_41;
        $data->nop_41 = $request->nop_41;
        $data->pemohon_42 = $request->pemohon_42;
        $data->alamat_42 = $request->alamat_42;
        $data->kelas_42 = $request->kelas_42;
        $data->nop_42 = $request->nop_42;
        $data->pemohon_43 = $request->pemohon_43;
        $data->alamat_43 = $request->alamat_43;
        $data->kelas_43 = $request->kelas_43;
        $data->nop_43 = $request->nop_43;
        $data->pemohon_44 = $request->pemohon_44;
        $data->alamat_44 = $request->alamat_44;
        $data->kelas_44 = $request->kelas_44;
        $data->nop_44 = $request->nop_44;
        $data->pemohon_45 = $request->pemohon_45;
        $data->alamat_45 = $request->alamat_45;
        $data->kelas_45 = $request->kelas_45;
        $data->nop_45 = $request->nop_45;
        $data->pemohon_46 = $request->pemohon_46;
        $data->alamat_46 = $request->alamat_46;
        $data->kelas_46 = $request->kelas_46;
        $data->nop_46 = $request->nop_46;
        $data->pemohon_47 = $request->pemohon_47;
        $data->alamat_47 = $request->alamat_47;
        $data->kelas_47 = $request->kelas_47;
        $data->nop_47 = $request->nop_47;
        $data->pemohon_48 = $request->pemohon_48;
        $data->alamat_48 = $request->alamat_48;
        $data->kelas_48 = $request->kelas_48;
        $data->nop_48 = $request->nop_48;
        $data->pemohon_49 = $request->pemohon_49;
        $data->alamat_49 = $request->alamat_49;
        $data->kelas_49 = $request->kelas_49;
        $data->nop_49 = $request->nop_49;
        $data->pemohon_50 = $request->pemohon_50;
        $data->alamat_50 = $request->alamat_50;
        $data->kelas_50 = $request->kelas_50;
        $data->nop_50 = $request->nop_50;
        $data->nagab = $request->nagub;

        $data->save();
        return redirect()->route('gabungarsip');
    }

    public function getGabungArsip()
    {
        $data = GabungData::orderBy('id','desc')->paginate(10);
        return view('admin.gabungarsip')->withData($data);
    }

}
