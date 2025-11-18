<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggaran;
use App\Models\Siswa;
use App\Models\Jenis;
use App\Models\User;


class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pelanggarans = Pelanggaran::with(['JenisPelanggaran', 'SiswaPelanggaran', 'UserPelanggaran'])->get();
        return view('pelanggaran.index', compact('pelanggarans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $siswas = Siswa::all();
        $jenis = Jenis::all();
        $users = User::all();
        return view('pelanggaran.create', compact('siswas', 'jenis', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'foto' => 'nullable',
            'tanggal' => 'required|date',
            'jenis_id' => 'required',
            'siswa_id' => 'required',
            'user_id' => 'required',
        ]);

        $data = $request->file('foto')->store('foto-siswa', 'public');


        Pelanggaran::create([
            'foto' => $data,
            'tanggal' => $request->tanggal,
            'jenis_id' => $request->jenis_id,
            'siswa_id' => $request->siswa_id,
            'user_id' => $request->user_id,
        ]);
        return redirect()->route('pelanggaran.index')->with('success', 'Pelanggaran berhasil dibuat. ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $pelanggarans = Pelanggaran::with(['JenisPelanggaran', 'SiswaPelanggaran', 'UserPelanggaran'])->findOrFail($id);
        return view('pelanggaran.show', compact('pelanggarans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $pelanggaran = Pelanggaran::findOrFail($id);
        $siswas = Siswa::all();
        $jenis = Jenis::all();
        $users = User::all();
        return view('pelanggaran.edit', compact('pelanggaran', 'siswas', 'jenis', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $pelanggaran = Pelanggaran::findOrFail($id);

        $request->validate([
            'foto' => 'nullable',
            'tanggal' => 'required|date',
            'jenis_id' => 'required',
            'siswa_id' => 'required',
            'user_id' => 'required',
        ]);

        $data = $request->only(['tanggal', 'jenis_id', 'siswa_id', 'user_id']);
        if($request->hasFile('foto')){
            $data['foto'] = $request->file('foto')->store('foto-siswa', 'public');
        };
        $pelanggaran->update($data);
        return redirect()->route('pelanggaran.index')->with('success', 'Pelanggaran berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pelanggaran = Pelanggaran::findOrFail($id);
        $pelanggaran->delete();
        return redirect()->route('pelanggaran.index')->with('success', 'Pelanggaran berhasil dihapus.');
    }
}
