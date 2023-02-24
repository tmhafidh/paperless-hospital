<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Models\RegistrasiPasien;
use Illuminate\Routing\Controller;
use App\Http\Requests\RegistrasiPasienRequest;

class RegistrasiPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrasis = RegistrasiPasien::all();
        return view('admin.pages.registrasi.index')->with('registrasis', $registrasis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id_poli = Poli::all();
        $no_rm = Pasien::all();
        return view('admin.pages.registrasi.create')->with('id_polis', $id_poli)->with('no_rms', $no_rm);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registrasi = $request->all();

        RegistrasiPasien::create([
            'no_rm' => $request->no_rm,
            'no_registrasi' => $request->no_registrasi,
            'no_rawat' => $request->no_rawat,
            'id_poli' => $request->id_poli,
            'tgl_registrasi' => $request->tgl_registrasi,
        ]);
        return redirect()->route('registrasi.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($no_rawat)
    {
        $registrasi = RegistrasiPasien::find($no_rawat);
        return view('admin.pages.registrasi.edit')->with('registrasi', $no_rawat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($no_rawat)
    {
        $registrasi = RegistrasiPasien::find($no_rawat);
        return view('admin.pages.registrasi.edit')->with(
            [
                'registrasi' => $registrasi,
                'id_poli' => Poli::all(),
                'no_rm' => Pasien::all(),
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $no_rawat)
    {
        $registrasi = RegistrasiPasien::find($no_rawat);
        $registrasi->no_rm = $request->no_rm;
        $registrasi->no_registrasi = $request->no_registrasi;
        $registrasi->no_rawat = $request->no_rawat;
        $registrasi->id_poli = $request->id_poli;
        $registrasi->tgl_registrasi = $request->tgl_registrasi;
        $registrasi->save();
        return redirect()->route('registrasi.index')
            ->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_rawat)
    {
        $registrasi = RegistrasiPasien::find($no_rawat);
        $registrasi->delete();
        return redirect()->route('registrasi.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
