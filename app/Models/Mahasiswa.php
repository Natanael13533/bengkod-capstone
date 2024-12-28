<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'inputmhs';

    protected $fillable = [
        'namaMhs',
        'nim',
        'ipk',
        'sks',
        'matakuliah'
    ];

    /**
     * Get all of the comments for the Mahasiswa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jadwalMhs()
    {
        return $this->hasMany(JwlMhs::class, 'mhs_id', 'id');
    }
}
