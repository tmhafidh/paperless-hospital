<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';

    protected $primaryKey = 'no_rm';

    protected $fillable = [
        'nama_pasien',
        'nik'
    ];

    // relasi many to many ke tabel registrasi pasien

    public function RegistrasiPasien()
    {
        return $this->belongsToMany('App\Models\RegistrasiPasien', 'no_rm');
    }
}
