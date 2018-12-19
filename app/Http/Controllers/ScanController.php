<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use App\Upload;
use App\DataBaru;
use App\MutasiPecah;
use App\Pembetulan;
use App\BalikNama;
use App\GabungData;
use Auth;

class ScanController extends Controller
{
	private $files_path;

    public function __construct()
    {
        $this->files_path = public_path('/files');
    }

    public function betul()
    {
        $data = Pembetulan::orderBy('id','desc')->paginate(10);
        return view('user.pembetulan')->withData($data);
    }

    public function getScanbtl($id)
    {
        $data = Pembetulan::find($id);

        return view('user.scanbtl')->withData($data);
    }

    public function postScanbtl(Request $request, $id)
    {
        $files = $request->file('file');
 
        if (!is_array($files)) {
            $files = [$files];
        }
 
        if (!is_dir($this->files_path)) {
            mkdir($this->files_path, 0777);
        }

        $new = Pembetulan::find($id);

        for ($i = 0; $i < count($files); $i++) {
            $file = $files[$i];
            $name = sha1(date('YmdHis') . str_random(30));
            $save_name = $name . '.' . $file->getClientOriginalExtension();
            $file->move($this->files_path, $save_name);
            $upload = new Upload();
            $upload->filename = $save_name;
            $upload->betul_id = $new->id;
            $upload->save();
        }

        return Response::json([
            'message' => 'Files saved Successfully'
        ], 200);
    }

    public function balik()
    {
        $data = BalikNama::orderBy('id','desc')->paginate(10);
        return view('user.baliknama')->withData($data);
    }

    public function getScanbl($id)
    {
        $data = BalikNama::find($id);

        return view('user.scanbl')->withData($data);
    }

    public function postScanbl(Request $request, $id)
    {
        $files = $request->file('file');
 
        if (!is_array($files)) {
            $files = [$files];
        }
 
        if (!is_dir($this->files_path)) {
            mkdir($this->files_path, 0777);
        }

        $new = BalikNama::find($id);

        for ($i = 0; $i < count($files); $i++) {
            $file = $files[$i];
            $name = sha1(date('YmdHis') . str_random(30));
            $save_name = $name . '.' . $file->getClientOriginalExtension();
            $file->move($this->files_path, $save_name);
            $upload = new Upload();
            $upload->filename = $save_name;
            $upload->balik_id = $new->id;
            $upload->save();
        }

        return Response::json([
            'message' => 'Files saved Successfully'
        ], 200);
    }

    public function gabung()
    {
    	$data = GabungData::orderBy('id','desc')->paginate(10);
        return view('user.gabung')->withData($data);
    }

    public function getScangb($id)
    {
        $data = GabungData::find($id);

        return view('user.scang')->withData($data);
    }

    public function postScangb(Request $request, $id)
    {
        $files = $request->file('file');
 
        if (!is_array($files)) {
            $files = [$files];
        }
 
        if (!is_dir($this->files_path)) {
            mkdir($this->files_path, 0777);
        }

        $new = GabungData::find($id);

        for ($i = 0; $i < count($files); $i++) {
            $file = $files[$i];
            $name = sha1(date('YmdHis') . str_random(30));
            $save_name = $name . '.' . $file->getClientOriginalExtension();
            $file->move($this->files_path, $save_name);
            $upload = new Upload();
            $upload->filename = $save_name;
            $upload->gabung_id = $new->id;
            $upload->save();
        }

        return Response::json([
            'message' => 'Files saved Successfully'
        ], 200);
    }

    public function pecah()
    {
    	$data = MutasiPecah::orderBy('id','desc')->paginate(10);
        return view('user.pecah')->withData($data);
    }

    public function getScanpecah($id)
    {
        $data = MutasiPecah::find($id);

        return view('user.scan')->withData($data);
    }

    public function postScanpecah(Request $request, $id)
    {
        $files = $request->file('file');
 
        if (!is_array($files)) {
            $files = [$files];
        }
 
        if (!is_dir($this->files_path)) {
            mkdir($this->files_path, 0777);
        }

        $new = MutasiPecah::find($id);

        for ($i = 0; $i < count($files); $i++) {
            $file = $files[$i];
            $name = sha1(date('YmdHis') . str_random(30));
            $save_name = $name . '.' . $file->getClientOriginalExtension();
            $file->move($this->files_path, $save_name);
            $upload = new Upload();
            $upload->filename = $save_name;
            $upload->pecah_id = $new->id;
            $upload->save();
        }

        return Response::json([
            'message' => 'Files saved Successfully'
        ], 200);
    }

    public function databaru()
    {
    	$data = DataBaru::orderBy('id','desc')->paginate(10);
        return view('user.databaru')->withData($data);
    }

    public function getScandb($id)
    {
        $data = DataBaru::find($id);

        return view('admin.scan')->withData($data);
    }

    public function postScandb(Request $request, $id)
    {
        $files = $request->file('file');
 
        if (!is_array($files)) {
            $files = [$files];
        }
 
        if (!is_dir($this->files_path)) {
            mkdir($this->files_path, 0777);
        }

        $new = DataBaru::find($id);

        for ($i = 0; $i < count($files); $i++) {
            $file = $files[$i];
            $name = sha1(date('YmdHis') . str_random(30));
            $save_name = $name . '.' . $file->getClientOriginalExtension();
            $file->move($this->files_path, $save_name);
            $upload = new Upload();
            $upload->filename = $save_name;
            $upload->data_id = $new->id;
            $upload->save();
        }

        return Response::json([
            'message' => 'Files saved Successfully'
        ], 200);
    }

    public function postStatus(Request $request, $id)
    {
        $data = DataBaru::find($id);
        $data->status = $request->status;
        $data->save();

        return redirect()->route('scandb');
    }

    public function postStatusPecah(Request $request, $id)
    {
        $data = MutasiPecah::find($id);
        $data->status = $request->status;
        $data->save();

        return redirect()->route('scanpecah');
    }

    public function postStatusGabung(Request $request, $id)
    {
        $data = GabungData::find($id);
        $data->status = $request->status;
        $data->save();

        
        return redirect()->route('scangb');
    }

    public function postStatusBalik(Request $request, $id)
    {
        $data = BalikNama::find($id);
        $data->status = $request->status;
        $data->save();

        
        return redirect()->route('balik');
    }

    public function postStatusBetul(Request $request, $id)
    {
        $data = Pembetulan::find($id);
        $data->status = $request->status;
        $data->save();

        return redirect()->route('betul');
    }
}
