<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriksaPasien extends Model
{
    use HasFactory;

    protected $table = 'periksa_pasien';

    protected $fillable = [
        'no_rawat',
        'kd_dokter',
        'ket_diagnosa',
    ];

    // relasi  many to one ke tabel Dokter
    public function Dokter()
    {
        return $this->belongsTo('App\Models\Dokter', 'kd_dokter');
    }

    //relasi one to one ke tabel registrasi pasien
    public function RegistrasiPasien()
    {
        return $this->belongsTo('App\Models\RegistrasiPasien', 'no_rawat');
    }
}
