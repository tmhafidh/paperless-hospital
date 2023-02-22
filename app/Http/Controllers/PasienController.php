<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::all();
        return view('admin.pages.pasien.index', compact('pasiens'));
    }

    public function create()
    {
        return view('admin.pages.pasien.create');
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'no_rm' => 'required',
        //     'nama' => 'required|max:255',
        //     'nik' => 'required|max:17'
        // ]);

        $pasien = Pasien::create([
            'no_rm' => $request->no_rm,
            'nama_pasien' => $request->nama_pasien,
            'nik' => $request->nik
        ]);

        if ($pasien) {
            return redirect()->route('pasien.index')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->route('pasien.index')->with('error', 'Data gagal ditambahkan');
        }
    }
}
