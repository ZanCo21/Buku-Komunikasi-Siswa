<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
    public function index()
    {
        $data = Pelanggaran::all();
        Return view('admin.pelanggaran.pelanggaran', compact('data'));
    }

    public function formpelanggaran()
    {
        Return view('admin.pelanggaran.add_pelanggaran');
    }

    public function store(Request $request)
    {
        $postdata = New Pelanggaran;
        $postdata->jenispelanggaran = $request->jenispelanggaran;
        $postdata->point = $request->point;
        $postdata->sanksi = $request->sanksi;

        $postdata->save();

        return redirect('datapelanggaran');
    }

    public function getpelanggaran($id)
    {
        $getpelanggaran = Pelanggaran::find($id);
        return view('admin.pelanggaran.edit_pelanggaran', compact('getpelanggaran'));
    }

    public function editpelanggaran(Request $request, $id)
    {
        $getpelanggaran = Pelanggaran::find($id);
        $getpelanggaran->update($request->all());

        return redirect()->route('datapelanggaran')->with('success','Student deleted successfully');
    }

    public function delete($id)
    {
        $dltdata = Pelanggaran::find($id);
        $dltdata->delete();

        return redirect()->route('datapelanggaran')->with('success','Student deleted successfully');
    }
}
