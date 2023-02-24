<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;

    protected $table = 'poli';

    protected $primaryKey = 'id_poli';

    protected $fillable = [
        'id_poli',
        'nm_poli',
    ];

    //relasi one to one ke tabel dokter
    // public function Dokter()
    // {
    //     return $this->hasOne('App\Models\Dokter', 'id_poli');
    // }

    // // relasi one to one ke tabel registrasi pasien
    // public function RegistrasiPasien()
    // {
    //     return $this->hasOne('App\Models\RegistrasiPasien', 'id_poli_tujuan');
    // }
}
