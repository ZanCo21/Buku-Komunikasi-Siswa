<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'name',
        'kelas',
        'jurusan',
        'image',
        'nis',
        'jeniskelamin',
        'alamat',
        'notelp',
        'email',
        'password',
        'point',
        'walikelas_id',
    ];

    public function gurus()
    {
        return $this->belongsTo(Guru::class, 'walikelas_id');
    }

    public function kelaas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }


    public function kasus()
    {
        return $this->belongsToMany(Pelanggaran::class, 'kasus', 'siswa_id', 'pelanggaran_id');
    }

    public function siswwaa()
    {
        return $this->belongsToMany(Siswa::class, 'kasus', 'siswa_id', 'pelanggaran_id');
    }
}
