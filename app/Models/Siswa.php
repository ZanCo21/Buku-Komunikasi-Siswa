<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

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
        'walikelas_id',
    ];

    public function gurus()
    {
        return $this->belongsTo(Guru::class, 'walikelas_id');
    }
}
