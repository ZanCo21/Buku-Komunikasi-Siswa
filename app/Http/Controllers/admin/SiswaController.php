<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Kasus;
use App\Models\Kelas;
use App\Models\Pelanggaran;
use App\Models\Siswa;
use App\Models\User;
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
        $awal = $editsiswa->image;

        $dt = [
            'name' => $request['name'],
            'kelas_id' => $request['kelas_id'],
            'jurusan' => $request['jurusan'],
            'nis' => $request['nis'],
            'jeniskelamin' => $request['jeniskelamin'],
            'image' => $awal,
            'alamat' => $request['alamat'],
            'notelp' => $request['notelp'],
            'email' => $request['email'],
            'password' => $request['password'],
            'walikelas_id' => $request['walikelas_id'],

        ];

        // if ($request->hasfile('image')) {
            $request->image->move(public_path().'/profilsiswa', $awal);
        // }
        $editsiswa->update($dt);

        return redirect()->route('siswa')->with('success','Student deleted successfully');
    }

    public function halamandua(){
        $kasus = Kasus::count();
        $siswas = Siswa::count();
        $pelanggaran = Pelanggaran::count();
        $guru = Guru::count();
        $laporan = Kasus::with('siswwaa','kasuss','kelas')->get();
        return view('halaman.dashboard', compact('laporan', 'kasus','siswas','pelanggaran','guru'));
    }

    public function detailsiswa($id)
    {
        $detaisiswa = Siswa::with('gurus','kelaas')->find($id);

        $detailpoint = Kasus::with('kasuss','siswwaa')->where('siswa_id', $id)->get();
        
        return view('admin.detail_siswa', compact('detaisiswa', 'detailpoint'));
    }

    public function deleteKasus($id)
    {
        $deletekasus = Kasus::find($id);

        $deletekasus->delete();

        return redirect()->route('dashboard')->with('success','Student deleted successfully');
    }
}
