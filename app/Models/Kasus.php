<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus extends Model
{
    use HasFactory;

    protected $table = 'kasus';

    protected $fillable = [
        'siswa_id',
        'pelanggaran_id',
    ];

    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'id');
    }

    public function kasuss()
    {
        return $this->belongsToMany(Pelanggaran::class, 'kasus', 'id');
    }

    public function siswwaa()
    {
        return $this->belongsToMany('App\Models\Siswa', 'kasus', 'id');
    }
}
