<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{
    public function index(){
        $title = 'Sistem Informasi Geografis Wisata';
        // $wisata = Wisata::oldest()->paginate(10)->withQueryString();
        $wisata = Wisata::latest()->get();
        $jumlah_wisata = Wisata::count();

        return view('pages.landingpage', compact('title', 'wisata', 'jumlah_wisata'));
    }

    public function show($id)
    {
        $title = 'Detail Wisata';
        $wisata = Wisata::find($id);
        
        return view('pages.detail', compact('title', 'wisata'));
    }
    public function view()
    {
        $wisata = Wisata::latest()->paginate(5);
      
        return view('pages.view',compact('wisata'))
            ->with('i', (request()->input('wisata', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
	DB::table('wisata')->insert([
		'nama' =>  $request->nama,
		'jenis' =>  $request->jenis,
		'harga' =>  $request->harga,
		'id_region' =>  $request->id_region,
        'id_kecamatan' =>  $request->id_kecamatan,
		'alamat' =>  $request->alamat,
		'deskripsi' =>  $request->deskripsi,
		'fasilitas' =>  $request->fasilitas,
        'sosmed' =>  $request->sosmed,
		'contact' =>  $request->contact,
		'latitude' =>  $request->latitude,
		'longtitude' =>  $request->longtitude,
        'cover' =>  $request->cover,
		'foto1' =>  $request->foto1,
		'foto2' =>  $request->foto2,
	]);

	return redirect()->route('wisata.view')
                        ->with('success','Wisata created successfully.');
 
    }

    public function edit(Wisata $wisata)
    {
        return view('pages.edit',compact('wisata'));
    }

    public function update(Request $request, Wisata $wisata)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            'id_region' => 'required',
            'id_kecamatan' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required',
            'fasilitas' => 'required',
            'sosmed' => 'required',
            'contact' => 'required',
            'latitude' => 'required',
            'longtitude' => 'required',
            'cover' => 'required',
            'foto1' => 'required',
            'foto2' => 'required',
        ]);
      
        $wisata->update($request->all());
      
        return redirect()->route('wisata.view')
                        ->with('success','Wisata updated successfully');
    }

    public function destroy(Wisata $wisata)
    {
        $wisata->delete();
       
        return redirect()->route('wisata.view')
                        ->with('success','wisata deleted successfully');
    }
}
