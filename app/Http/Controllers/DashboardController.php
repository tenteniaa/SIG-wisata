<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\Kecamatan;
use App\Models\User;
use App\Models\JenisWisata;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $title = 'Dashboard';

        // Wisata
        $wisata = Wisata::latest()->get();
        $jumlah_wisata = Wisata::count();
        $jumlah_wisata_kab = Wisata::where('id_region', 1)->count();
        $jumlah_wisata_kota = Wisata::where('id_region', 2)->count();

        // Kategori
        $wisata_alam = JenisWisata::where('id_jenis', 1)->count();
        $wisata_sejarah = JenisWisata::where('id_jenis', 2)->count();
        $wisata_hiburan = JenisWisata::where('id_jenis', 3)->count();

        // User
        $user = User::all();
        $jumlah_user = User::count();

        // Kecamatan
        $jumlah_kecamatan_kab = Kecamatan::where('id_region', 1)->count();
        $jumlah_kecamatan_kota = Kecamatan::where('id_region', 2)->count();
    
        return view('pages.dashboard', 
            compact(
                'title', 
                'wisata', 
                'jumlah_wisata', 
                'jumlah_kecamatan_kota', 
                'jumlah_kecamatan_kab', 
                'jumlah_user',
                'jumlah_wisata_kab',
                'jumlah_wisata_kota',
                'wisata_alam',
                'wisata_sejarah',
                'wisata_hiburan',
                'user'
            )
        );
    }
}
