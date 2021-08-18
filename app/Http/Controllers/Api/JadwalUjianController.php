<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JadwalUjian;

class JadwalUjianController extends Controller
{
    public function index(){

        // dd($request->all());die();
        $jadwalujian = JadwalUjian::all();
        return response()->json([
            'success' => 1,
            'massage' => 'Berhasil Memuat Jadwal Ujian',
            'jadwal_ujians' => $jadwalujian
        ]);
     }
}
