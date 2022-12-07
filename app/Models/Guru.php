<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'guru';

    protected $fillable = [
        'id',
        'name',
        'nik',
        'mapel',
    ];

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
