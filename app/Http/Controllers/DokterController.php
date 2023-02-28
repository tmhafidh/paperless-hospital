<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\DokterRequest;
use Illuminate\Support\Facades\DB;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokters = Dokter::all();
        return view('admin.pages.dokter.index')->with('dokters', $dokters);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id_polis = Poli::all();

        $kd_dokter = Dokter::all();

        $q = DB::table('dokter')->select(DB::raw('MAX(RIGHT(kd_dokter,3)) as kode'))->first();

        $kd = "";
        if ($q->kode) {
            $tmp = ((int)$q->kode) + 1;
            $kd = sprintf("%03s", $tmp);
        } else {
            $kd = "001";
        }
        // dd($kd);

        return view('admin.pages.dokter.create', compact('id_polis', 'kd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DokterRequest $request)
    {
        $dokter = $request->all();

        Dokter::create([
            'kd_dokter' => $request->kd_dokter,
            'nm_dokter' => $request->nm_dokter,
            'id_poli' => $request->id_poli,
        ]);
        return redirect()->route('dokter.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kd_dokter)
    {
        $dokter = Dokter::findOrFail($kd_dokter);

        return view('admin.pages.dokter.edit')->with([
            'dokter' => $dokter
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kd_dokter)
    {
        $dokter = Dokter::findOrFail($kd_dokter);
        $id_polis = Poli::all();

        return view('admin.pages.dokter.edit')->with([
            'dokter' => $dokter,
            'id_polis' => $id_polis
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DokterRequest $request, $kd_dokter)
    {
        $dokter = Dokter::findOrFail($kd_dokter);
        $dokter->update([
            'kd_dokter' => $request->kd_dokter,
            'nm_dokter' => $request->nm_dokter,
            'id_poli' => $request->id_poli,
        ]);
        return redirect()->route('dokter.index')
            ->with('success', 'Data berhasil diubah');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kd_dokter)
    {
        $dokter = Dokter::findOrFail($kd_dokter);
        $dokter->delete();
        return redirect()->route('dokter.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
