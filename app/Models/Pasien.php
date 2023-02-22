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
        'no_rm',
        'nama_pasien',
        'nik'
    ];

    // relasi one to many

    public function RegistrasiPasien()
    {
        return $this->hasMany('App\Models\RegistrasiPasien', 'no_rm');
    }
}
