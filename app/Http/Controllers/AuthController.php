<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data;
use App\Models\LoggedInRfid;

class AuthController extends Controller
{
    public function authenticateRF(Request $request)
{
    $data = $request->all();

    $userData = data::where('rf_id', $data['rf_id'])->first();

    if ($userData) {
        // Menyimpan data pengguna yang telah login
        LoggedInRfid::create([
            'nama' => $userData->nama,
            'rf_id' => $userData->rf_id,
            'telpon' => $userData->telpon,
            'created_at' => $userData->waktu_login,
            'jenis_kelamin'=>$userData->jenis_kelamin,

            // Tambahkan atribut lain yang ingin Anda simpan
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Authenticated successfully'
        ]);
    } else {
        return response()->json([
            'status' => 'error',
            'message' => 'Authentication failed'
        ]);
    }

 /*    if ($userData) {
        return response()->json([
            'status' => 'success',
            'message' => 'Authenticated successfully'
        ]);
    } else {
        return response()->json([
            'status' => 'error',
            'message' => 'Authentication failed'
        ]);
    } */
}

}
