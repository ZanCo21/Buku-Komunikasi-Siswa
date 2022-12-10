<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Kasus;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::with('gurus','kelaas','kasus')->get();
        return view('admin.siswa', compact('siswa') );
    }   

    public function formsiswa()
    {
        $walikelas = Guru::all();

        $kelas = Kelas::all();

        return view('admin.add_siswa', compact('walikelas','kelas'));
    }

    public function store(Request $request)
    {

        $img = $request->image;
        $namaFile =  time().rand(100,999).".".$img->getClientOriginalExtension();

        $postProduk = new Siswa;
        $postProduk->name = $request->name;
        $postProduk->image = $namaFile;
        $postProduk->kelas_id = $request->kelas_id;
        $postProduk->point = $request->point;
        $postProduk->jurusan = $request->jurusan;
        $postProduk->nis = $request->nis;
        $postProduk->jeniskelamin = $request->jeniskelamin;
        $postProduk->alamat = $request->alamat;
        $postProduk->notelp = $request->notelp;
        $postProduk->email = $request->email;
        $postProduk->password = $request->password;
        $postProduk->walikelas_id = $request->walikelas_id;

        $img->move(public_path().'/profilsiswa', $namaFile);
        $postProduk->save();

        return redirect('siswa');
    }

    public function getsiswa($id)
    {
        $walikelas = Guru::all();
        $kelas = Kelas::all();

        $getsiswa = Siswa::with('gurus','kelaas')->find($id);

        return view('admin.edit_siswa', compact('getsiswa', 'walikelas', 'kelas'));
    }

    public function delete($id)
    {   
        $data = Siswa::find($id);
        $data->delete();

        return redirect()->route('siswa')->with('success','Student deleted successfully');
    }

    public function editsiswa(Request $request ,$id)
    {
        $editsiswa = Siswa::find($id);
        $editsiswa->update($request->all());

        return redirect()->route('siswa')->with('success','Student deleted successfully');
    }

    public function halamandua(){
        $laporan = Kasus::with('siswwaa','kasuss','kelas')->get();
        return view('halaman.dashboard', compact('laporan'));
    }
}
