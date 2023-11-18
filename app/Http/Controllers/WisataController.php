<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{
    public function index(){
        $title = 'Landing Page';
        $wisata = Wisata::oldest()->paginate(10)->withQueryString();

        return view('pages.landingpage', compact('title', 'wisata'));
    }

    public function show($id)
    {
        $wisata = Wisata::find($id);
        return view('pages.detail')->with('wisata', $wisata);
    }
}
