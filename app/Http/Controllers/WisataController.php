<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\JenisWisata;
use App\Models\Region;
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
}
