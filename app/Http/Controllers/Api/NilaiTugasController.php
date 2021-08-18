<?php

namespace App\Http\Controllers\Api;

use App\Mapel;
use App\NilaiTugas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class NilaiTugasController extends Controller
{
    public function index(Request $request) {
        $userId = $request->query("user");

        if ($userId) {
            $mData = NilaiTugas::with(['mapel'])->where('user_id', $userId)->get();
        } else {
            $mData = NilaiTugas::with(['mapel'])->get();
        }

        return response()->json([
            'success' => 1,
            'massage' => 'Nilai Berhasil dibuat',
            'nilaiTugas' => $mData
        ]);
    }

    public function store(Request $request) {
        $validasi = Validator::make($request->all(), [
            'user_id' => 'required',
            'mapel_id' => 'required',
            'nilai' => 'required'
        ]);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->error($val[0]);
        }

        $mData = NilaiTugas::create($request->all());

        if ($mData) {
            return response()->json([
                'success' => 1,
                'massage' => 'Nilai Berhasil dibuat',
                'nilai' => $mData
            ]);
        }
        return $this->error('Gagal membuat data');
    }

    public function update(Request $request, $id) {
    }

    public function destroy($id) {
    }

    public function create() {
        //
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        //
    }
}
