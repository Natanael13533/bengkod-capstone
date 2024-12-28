<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JwlMataKuliah extends Model
{
    protected $table = 'jwl_matakuliah';

    protected $fillable = [
        'matakuliah',
        'sks',
        'kelp',
        'ruangan'
    ];
}
