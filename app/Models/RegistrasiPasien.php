<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrasiPasien extends Model
{
    use HasFactory;

    protected $table = 'registrasi_pasien';

    protected $primaryKey = 'no_rawat';

    protected $fillable = [
        'no_rm',
        'no_registrasi',
        'id_poli_tujuan',
        'tgl_registrasi',
    ];


    // relasi many to one ke tabel pasien
    public function Pasien()
    {
        return $this->belongsTo('App\Models\Pasien', 'no_rm');
    }

    // relasi one to one ke tabel poli
    public function Poli()
    {
        return $this->hasOne('App\Models\Poli', 'id_poli_tujuan');
    }

    // relasi one to one ke tabel periksa pasien
    public function PeriksaPasien()
    {
        return $this->hasOne('App\Models\PeriksaPasien', 'no_rawat');
    }
}
