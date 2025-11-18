<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\Kelas;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $siswas = siswa::with('Kelas')->get();
        return view('siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $kelas = Kelas::all();
        return view('siswa.create', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nis' => 'required|unique:siswa,nis',
            'nama' => 'required',
            'kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'nullable',
            'foto' => 'nullable',
            'kelas_id' => 'required'
        ]);

        $data = $request->file('foto')->store('foto-siswa', 'public');

        siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelamin' => $request->kelamin,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'foto' => $data,
            'kelas_id' => $request->kelas_id
        ]);
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $siswa = siswa::findOrFail($id);
        $kelas = Kelas::all();
        return view('siswa.edit', compact('siswa', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $siswa = Siswa::findOrFail($id);

        $request->validate([
            'nis' => 'required|unique:siswa,nis,' . $siswa->id,
            'nama' => 'required',
            'kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'kelas_id' => 'required'
        ]);

        $data = $request->only(['nis', 'nama', 'kelamin', 'agama', 'alamat', 'kelas_id']);
        if($request->hasFile('foto')){
            $data['foto'] = $request->file('foto')->store('foto-siswa', 'public');
        };

        $siswa->update($data);

        return redirect()->route('siswa.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Data dihapus');
    }
}
