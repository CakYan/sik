<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $totals = Pasien::all()->count();
        $pasiens = Pasien::where('Status', 'Sedang Rawat Inap')->count();
        return view('content.dashboard', compact('totals', 'pasiens'));
    }
}
