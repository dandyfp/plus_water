<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data;
use App\Models\LoggedInRfid;

class DashboardController extends Controller
{
    public function dashboard()
{
    $loggedUsers = LoggedInRfid::all();

    return view('dashboard', compact('loggedUsersRfId'));
}

}
