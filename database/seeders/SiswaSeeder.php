<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
        	'name' => 'Dani',
        	'jurusan' => 'MM',
        	'nis' => 2919221,
        	'alamat' => 'Jl. jakarta',
        	'jeniskelamin' => 'Laki Laki',
            'notelp' => 2882166,
        	'email' => 'dhani@gmail.com',
        	'password' => 'dhani',
        	'point' => 0,
        	'kelas_id' => 2,
        	'walikelas_id' => 1,
            'image' => '1670375135207.jpg',
        ]);
    }
}
