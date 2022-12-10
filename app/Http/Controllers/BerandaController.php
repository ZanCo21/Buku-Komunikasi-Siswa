<?php

namespace App\Http\Controllers;

use App\Models\Kasus;
use App\Models\kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('halaman.index');
    }

    public function halamansatu(){
        return view('halaman.index');
    }

}
