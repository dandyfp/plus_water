<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\data;


class UserController extends Controller
{
    public function index()
{
    $users = data::all();

    
    return response()->json([
        'status' => 'success',
        'data' => $users
    ]);
}

}
