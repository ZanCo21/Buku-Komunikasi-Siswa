<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    use HasFactory;

    protected $table = 'pelanggaran';

    protected $fillable = 
    [
        'jenispelanggaran',
        'point',
        'sanksi',
    ];
    public function siswass()
    {
        return $this->belongsToMany(Siswa::class, 'kasus', 'siswa_id', 'pelanggaran_id');
    }
}
