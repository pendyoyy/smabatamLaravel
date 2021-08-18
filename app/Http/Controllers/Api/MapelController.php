<?php

namespace App\Http\Controllers\Api;

use App\Mapel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class MapelController extends Controller
{
    public function index() {
        $mData = Mapel::all();
        return response()->json([
            'success' => 1,
            'massage' => 'success',
            'mapels' => $mData
        ]);
    }

    public function store(Request $request) {
        $validasi = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->error($val[0]);
        }

        $mData = Mapel::create($request->all());

        if ($mData) {
            return response()->json([
                'success' => 1,
                'massage' => 'Mapel Berhasil dibuat',
                'mapel' => $mData
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

    public function error($pesan) {
        return response()->json([
            'success' => 0,
            'massage' => $pesan
        ]);
    }
}
