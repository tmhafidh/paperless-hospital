<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokter';

    protected $primaryKey = 'kd_dokter';

    public $incrementing = false;

    protected $fillable = [
        'kd_dokter',
        'nm_dokter',
        'id_poli'

    ];


    //relasi one to one ke tabel poli
    public function Poli()
    {
        return $this->belongsTo('App\Models\Poli', 'id_poli');
    }

    //resali one to many ke tabel periksa pasien
    public function PeriksaPasien()
    {
        return $this->hasMany('App\Models\PeriksaPasien', 'kd_dokter');
    }
}
