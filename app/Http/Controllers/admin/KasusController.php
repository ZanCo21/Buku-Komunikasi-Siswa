<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KasusController extends Controller
{
    public function index()
    {
        return view('admin.kasus.add_kasus');
    }
}
