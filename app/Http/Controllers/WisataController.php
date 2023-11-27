<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\Jenis;
use App\Models\JenisWisata;
use App\Models\Region;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{
    public function index(){
        $title = 'Sistem Informasi Geografis Wisata';
        $wisata = Wisata::latest()->get();
        $jumlah_wisata = Wisata::count();

        // Jenis
        $alam = JenisWisata::where('id_jenis', 1)->get();
        $sejarah = JenisWisata::where('id_jenis', 2)->get();
        $hiburan = JenisWisata::where('id_jenis', 3)->get();

        return view('pages.landingpage', 
            compact(
                'title', 
                'wisata', 
                'jumlah_wisata', 
                'alam', 
                'sejarah', 
                'hiburan',
            )
        );
    }

    public function show($id)
    {
        $title = 'Detail Wisata';
        $wisata = Wisata::find($id);
        
        return view('pages.detail', compact('title', 'wisata'));
    }

    public function view()
    {
        $title = 'Daftar Wisata';
        $wisata = Wisata::latest()->get();
      
        return view('form.view', compact('wisata', 'title'));
    }

    public function create()
    {
        $title = 'Tambah Wisata';
        $jenis = Jenis::all();
        $region = Region::all();
        $kecamatan = Kecamatan::all();

        return view('form.create', compact('title', 'jenis', 'region', 'kecamatan'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'id_region' => 'required',
            'id_kecamatan' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'nullable',
            'fasilitas' => 'nullable',
            'sosmed' => 'nullable',
            'contact' => 'nullable',
            'latitude' => 'required',
            'longitude' => 'required',
            'cover' => 'required|image',
            'foto1' => 'nullable|image',
            'foto2' => 'nullable|image',
            'id_jenis' => 'required',
        ]);

        // cover
        $coverName = time().'.'.$request->cover->extension();
        $request->cover->move(public_path('assets/images/wisata/'), $coverName);

        // Simpan data ke tabel 'wisata'
        $wisata = new Wisata($validatedData);
        $wisata->cover = $coverName;
        $wisata->save();

        // foto1
        if ($request->hasFile('foto1')) {
            $foto1Name = time().'.'.$request->foto1->extension();
            $request->foto1->move(public_path('assets/images/wisata/'), $foto1Name);
            $wisata->foto1 = $foto1Name;
            $wisata->save();
        }

        // foto2
        if ($request->hasFile('foto2')) {
            $foto2Name = time().'.'.$request->foto2->extension();
            $request->foto2->move(public_path('assets/images/wisata/'), $foto2Name);
            $wisata->foto2 = $foto2Name;
            $wisata->save();
        }

        // Simpan multiple 'id_jenis' di tabel 'jenis_wisata'
        foreach ($validatedData['id_jenis'] as $idJenis) {
            $jenisWisata = new JenisWisata([
                'id_jenis' => $idJenis,
            ]);

            $wisata->jenis_wisata()->save($jenisWisata);
        }

        return redirect()->route('wisata.view')->with('success', 'Wisata berhasil disimpan');
    }

    public function edit($id)
    {
        $title = 'Edit Wisata';
        $wisata = Wisata::find($id);
        $jenis = Jenis::all();
        $selectedJenis = $wisata->jenis_wisata->pluck('id_jenis')->toArray();
        $region = Region::all();
        $kecamatan = Kecamatan::all();

        return view('form.edit', compact('title', 'wisata', 'jenis', 'selectedJenis', 'region', 'kecamatan'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'id_region' => 'required',
            'id_kecamatan' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'nullable',
            'fasilitas' => 'nullable',
            'sosmed' => 'nullable',
            'contact' => 'nullable',
            'latitude' => 'required',
            'longitude' => 'required',
            'cover' => 'nullable',
            'foto1' => 'nullable',
            'foto2' => 'nullable',
            'id_jenis' => 'required',
        ]);

        $wisata = Wisata::findOrFail($id);
        $wisata->fill($validatedData);

        // cover
        if ($request->hasFile('cover')) {
            $coverName = time().'.'.$request->cover->extension();
            $request->cover->move(public_path('assets/images/wisata/'), $coverName);
            $wisata->cover = $coverName;
        }

        // foto1
        if ($request->hasFile('foto1')) {
            $foto1Name = time().'.'.$request->foto1->extension();
            $request->foto1->move(public_path('assets/images/wisata/'), $foto1Name);
            $wisata->foto1 = $foto1Name;
        }

        // foto2
        if ($request->hasFile('foto2')) {
            $foto2Name = time().'.'.$request->foto2->extension();
            $request->foto2->move(public_path('assets/images/wisata/'), $foto2Name);
            $wisata->foto2 = $foto2Name;
        }

        $wisata->save();

        // Hapus semua entri JenisWisata yang terkait dengan wisata ini
        $wisata->jenis_wisata()->delete();

        // Simpan kembali multiple 'id_jenis' di tabel 'jenis_wisata'
        foreach ($validatedData['id_jenis'] as $idJenis) {
            $jenisWisata = new JenisWisata([
                'id_jenis' => $idJenis,
            ]);

            $wisata->jenis_wisata()->save($jenisWisata);
        }

        return redirect()->route('wisata.view')->with('success', 'Wisata berhasil diupdate');
    }

    public function destroy($id)
    {
        $wisata = Wisata::find($id);
    
        if (!$wisata) {
            return redirect()->route('wisata.view')->with('error', 'Wisata tidak ditemukan');
        }
    
        // Hapus entri di tabel JenisWisata yang terkait
        $wisata->jenis_wisata()->delete();
        // Hapus entri di tabel Wisata
        $wisata->delete();
    
        return redirect()->route('wisata.view')->with('success', 'Wisata berhasil dihapus');
    }
}
