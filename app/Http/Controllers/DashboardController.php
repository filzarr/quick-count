<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partai;
use DB;
class DashboardController extends Controller
{
    public function index(){

        return view('pages.dashboard.index');
    }
    public function rekap(){
        return view('pages.dashboard.rekap');
    }
    public function edittps($tpsid){
        $tpsid = $tpsid;
        return view('pages.dashboard.edit', compact('tpsid'));
    }
}
