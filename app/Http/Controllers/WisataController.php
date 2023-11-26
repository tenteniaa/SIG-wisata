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
        // $wisata = Wisata::oldest()->paginate(10)->withQueryString();
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
            'cover' => 'nullable',
            'foto1' => 'nullable',
            'foto2' => 'nullable',
            'id_jenis' => 'required',
        ]);

        // Simpan data ke tabel 'wisata'
        $wisata = new Wisata($validatedData);
        $wisata->save();

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

    // public function update(Request $request, Wisata $wisata)
    // {
    //     $request->validate([
    //         'nama' => 'required',
    //         'harga' => 'required',
    //         'id_region' => 'required',
    //         'id_kecamatan' => 'required',
    //         'alamat' => 'required',
    //         'deskripsi' => 'nullable',
    //         'fasilitas' => 'nullable',
    //         'sosmed' => 'nullable',
    //         'contact' => 'nullable',
    //         'latitude' => 'required',
    //         'longitude' => 'required',
    //         'cover' => 'nullable',
    //         'foto1' => 'nullable',
    //         'foto2' => 'nullable',
    //     ]);
      
    //     $wisata->update($request->all());
      
    //     return redirect()->route('wisata.view')
    //                     ->with('success','Wisata berhasil diubah');
    // }

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

        // Gunakan fill untuk mengisi model Wisata dengan data yang valid
        $wisata = Wisata::findOrFail($id);
        $wisata->fill($validatedData);
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

    public function destroy(Wisata $wisata)
    {
        $wisata->delete();
       
        return redirect()->route('wisata.view')
                        ->with('success','Wisata berhasil dihapus');
    }
}
