<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use App\DataBaru;
use App\BalikNama;
use App\Pembetulan;
use App\GabungData;
use App\MutasiPecah;

class SuperController extends Controller
{

    public function index()
    {
        $data = DataBaru::where('status','DIKERJAKAN')->orderBy('id','desc')->paginate(10);

        return view('super.home')->withData($data);
    }

    public function detail($id)
    {
        $data = DataBaru::find($id);
        $file = Upload::where('data_id', $id)->get();

        return view('super.detail')->withData($data)->withFile($file);
    }

    public function putData(Request $request,$id)
    {
        $data = DataBaru::find($id);
        $data->validasi = $request->status;
        $data->save();

        return redirect()->route('super.index');
    }

    public function putPecah(Request $request,$id)
    {
        $data = MutasiPecah::find($id);
        $data->validasi = $request->status;
        $data->save();

        return redirect()->route('pecah');
    }

    public function putGabung(Request $request,$id)
    {
        $data = GabungData::find($id);
        $data->validasi = $request->status;
        $data->save();

        return redirect()->route('super.gabung');
    }

    public function putBalik(Request $request,$id)
    {
        $data = BalikNama::find($id);
        $data->validasi = $request->status;
        $data->save();

        return redirect()->route('super.balik');
    }

    public function putBetul(Request $request,$id)
    {
        $data = Pembetulan::find($id);
        $data->validasi = $request->status;
        $data->save();

        return redirect()->route('super.betul');
    }
    
    public function gabung()
    {
        $data = GabungData::where('status','DIKERJAKAN')->orderBy('id','desc')->paginate(10);

        return view('super.gabung')->withData($data);
    }

    public function gabungdetail($id)
    {
        $data = GabungData::find($id);
        $file = Upload::where('gabung_id', $id)->get();

        return view('super.gabungd')->withData($data)->withFile($file);
    }
    public function pecah()
    {
        $data = MutasiPecah::where('status','DIKERJAKAN')->orderBy('id','desc')->paginate(10);

        return view('super.pecah')->withData($data);
    }

    public function pecahdetail($id)
    {
        $data = MutasiPecah::find($id);
        $file = Upload::where('pecah_id', $id)->get();

        return view('super.pecahd')->withData($data)->withFile($file);
    }

    public function balik()
    {
        $data = BalikNama::where('status','DIKERJAKAN')->orderBy('id','desc')->paginate(10);
        return view('super.balik')->withData($data);
    }

    public function balikdetail($id)
    {
        $data = BalikNama::find($id);
        $file = Upload::where('balik_id', $id)->get();

        return view('super.balikd')->withData($data)->withFile($file);
    }

    public function betul()
    {
        $data = Pembetulan::where('status','DIKERJAKAN')->orderBy('id','desc')->paginate(10);

        return view('super.betul')->withData($data);
    }

    public function betuldetail($id)
    {
        $data = Pembetulan::find($id);
        $file = Upload::where('betul_id', $id)->get();

        return view('super.betuld')->withData($data)->withFile($file);
    }
}
