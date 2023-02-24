<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use Illuminate\Http\Request;
use App\Http\Requests\PoliRequest;
use Illuminate\Routing\Controller;

class PoliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poli = Poli::all();
        return view('admin.pages.poli.index')->with('polis', $poli);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.poli.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PoliRequest $request)
    {
        // dd($request);
        $poli = $request->all();

        Poli::create($poli);
        return redirect()->route('poli.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_poli)
    {
        $poli = Poli::findOrFail($id_poli);

        return view('admin.pages.poli.edit')->with([
            'poli' => $poli
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_poli)
    {
        $poli = Poli::findOrFail($id_poli);
        return view('admin.pages.poli.edit')->with(
            [
                'poli' => $poli
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
    public function update(PoliRequest $request, $id_poli)
    {
        $poli = $request->all();

        $poli = Poli::findOrFail($id_poli);
        $poli->update([
            // 'id_poli' => $request['id_poli'],
            'nm_poli' => $request['nm_poli'],
        ]);


        return redirect()->route('poli.index')
            ->with('success', 'Data berhasil diedit');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_poli)
    {
        $poli = Poli::findOrFail($id_poli);
        $poli->delete();

        return redirect()->route('poli.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
