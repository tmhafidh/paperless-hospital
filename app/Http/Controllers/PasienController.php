<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\PasienRequest;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasiens = Pasien::all();

        //

        return view('admin.pages.pasien.index')->with('pasiens', $pasiens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PasienRequest $request)
    {
        $pasien = $request->all();

        Pasien::create($pasien);
        return redirect()->route('pasien.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($no_rm)
    {
        $pasien = Pasien::findOrFail($no_rm);

        return view('admin.pages.pasien.edit')->with([
            'pasien' => $pasien
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($no_rm)
    {
        $pasien = Pasien::findOrFail($no_rm);
        return view('admin.pages.pasien.edit')->with(
            [
                'pasien' => $pasien
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
    public function update(PasienRequest $request, $no_rm)
    {
        $pasien = $request->all();

        $pasien = Pasien::findOrFail($no_rm);
        $pasien->update([
            'no_rm' => $request['no_rm'],
            'nama_pasien' => $request['nama_pasien'],
            'nik' => $request['nik']
        ]);


        return redirect()->route('pasien.index')
            ->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_rm)
    {
        $pasien = Pasien::findOrFail($no_rm);
        $pasien->delete();

        return redirect()->route('pasien.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
