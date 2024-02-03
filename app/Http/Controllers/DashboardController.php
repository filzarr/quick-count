<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partai;
use DB;
class DashboardController extends Controller
{
    public function index(){
        $data = DB::table('total_count_partai_view')
        ->get();
        return view('pages.dashboard.index', compact('data'));
    }
}
