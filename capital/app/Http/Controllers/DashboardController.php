<?php

namespace App\Http\Controllers;

use App\Models\Savings;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $savings = Savings::all();
        return view('dashboard')->with(['savings' => $savings, 'users' => $users]);
    }
}
