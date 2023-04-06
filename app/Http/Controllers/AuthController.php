<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data;

class AuthController extends Controller
{
    public function authenticateRF(Request $request)
{
    $data = $request->all();

    $userData = data::where('rf_id', $data['rf_id'])->first();

    if ($userData) {
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
}
    
}
