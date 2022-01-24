<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('Dashboard.dashboard');
    }

    public function sidebar(){
        return view('Dashboard.sidebar');
    }
}
