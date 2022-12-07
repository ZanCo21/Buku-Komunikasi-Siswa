<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::with('gurus')->paginate(10);
        return view('admin.siswa', compact('siswa') );
    }   

    public function formsiswa()
    {
        $walikelas = Guru::all();

        return view('admin.add_siswa', compact('walikelas'));
    }

    public function store(Request $request)
    {

        $img = $request->image;
        $namaFile =  time().rand(100,999).".".$img->getClientOriginalExtension();

        $postProduk = new Siswa;
        $postProduk->name = $request->name;
        $postProduk->image = $namaFile;
        $postProduk->kelas = $request->kelas;
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

        $getsiswa = Siswa::with('gurus')->find($id);

        return view('admin.edit_siswa', compact('getsiswa', 'walikelas'));
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
}
