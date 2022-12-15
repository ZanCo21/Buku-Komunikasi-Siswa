<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = kelas::all();
        return view('admin.kelas.kelas', compact('kelas'));
    }

    public function delete($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();

        return redirect()->route('kelas')->with('success','Student deleted successfully');
    }
    
    public function formkelas()
    {
        return view('admin.kelas.add_kelas');
    }

    public function getkelas($id)
    {
        $getkelas = Kelas::find($id);
        return view('admin.kelas.edit_kelas', compact('getkelas'));

    }

    public function postkelas(Request $request, $id)
    {
        $getkelas = Kelas::find($id);
        $getkelas->update($request->all());

        return redirect()->route('kelas')->with('success','Student deleted successfully');
    }

    public function store(Request $request)
    {
        $postkelas = new Kelas;
        $postkelas->name = $request->name;
        $postkelas->save();

        return redirect()->route('kelas')->with('success','Student deleted successfully');
    }
    
}
