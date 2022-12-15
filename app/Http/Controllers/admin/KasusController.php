<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kasus;
use App\Models\Pelanggaran;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KasusController extends Controller
{
    public function index()
    {
        $siswas = Siswa::with('kelaas')->paginate(5);
        return view('admin.kasus.add_kasus', compact('siswas'));
    }

    public function kasussiswa()
    {
        $data =Siswa::all();

        return response()->json($data);
    }

    public function getpelanggar()
    {
        $data =Pelanggaran::all();

        return response()->json($data);
    }

    public function store(Request $request)
    {
        $postkasus = new Kasus;
        $postkasus->siswa_id = $request->siswa_id;
        $postkasus->pelanggaran_id = $request->pelanggaran_id;

        $postkasus->save();

        return redirect('dashboard');

    }

    // public function getkasus($id)
    // {
    //     $getkasus = Kasus::find($id);

    //     return view('admin.kasus.edit_kasus', compact('getkasus'));   
    // }
}
