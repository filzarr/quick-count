<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Desa;
use App\Models\Tps;

class FormController extends Controller
{
    public function kota(){
        $data = Kota::get();
        return view('pages.form.index', compact('data'));
    }
    public function kecamatan($kota){
        $data = Kota::where('slug',$kota)->first();
        return view('pages.form.kecamatan', compact('data','kota'));
    }
    public function desa(Request $request){
        $kota = Kota::where('slug',$request->kota)->first();
        $data = Kecamatan::where('slug',$request->kecamatan)->first();
        return view('pages.form.desa', compact('data','request','kota'));
    }
    public function tps(Request $request){
        $kota = Kota::where('slug',$request->kota)->first();
        $kecamatan = Kecamatan::where('slug',$request->kecamatan)->first();
        $data = Desa::where('slug',$request->desa)->first();
        return view('pages.form.tps', compact('data','request','kota','kecamatan'));
    }
    public function form(Request $request){
        $kota = Kota::where('slug',$request->kota)->first();
        $kecamatan = Kecamatan::where('slug',$request->kecamatan)->first();
        $data = Desa::where('slug',$request->desa)->first();
        $tps = Tps::where('slug', $request->tps)->first();
        return view('pages.form.form', compact('request','data', 'tps','kota','kecamatan'));
    }
}
