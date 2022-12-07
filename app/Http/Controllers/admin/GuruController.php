<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        return view('admin.guru.guru', compact('guru'));
    }

    public function formguru()
    {
        return view('admin.guru.add_guru');
    }

    public function store(Request $request)
    {
        $postguru = New Guru;
        $postguru->nik = $request->nik;
        $postguru->name = $request->name;
        $postguru->mapel = $request->mapel;
        $postguru->save();

        return redirect('guru');
    }

    public function getguru($id)
    {
        $getguru = Guru::find($id);

        return view('admin.guru.edit_guru', compact('getguru'));
    }

    public function editguru(request $request, $id)
    {
        $getguru = Guru::find($id);
        $getguru->update($request->all());

        return redirect()->route('guru')->with('success','Student deleted successfully');
    }

    public function delete($id)
    {
        $getguru = Guru::find($id);
        $getguru->delete();

        return redirect()->route('guru')->with('success','Student deleted successfully');
    }
}