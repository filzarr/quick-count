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
}
