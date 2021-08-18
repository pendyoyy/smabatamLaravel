<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jadwal;

class JadwalController extends Controller
{
    public function index(){

        // dd($request->all());die();
        $jadwal = Jadwal::all();
        return response()->json([
            'success' => 1,
            'massage' => 'Berhasil Memuat Jadwal',
            'jadwals' => $jadwal
        ]);
     }
}
