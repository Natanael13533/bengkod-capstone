<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JwlMhs extends Model
{
    protected $table = 'jwl_mhs';

    protected $fillable = [
        'mhs_id',
        'matakuliah',
        'sks',
        'kelp',
        'ruangan'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mhs_id', 'id');
    }
}
