<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin(){
        return view('Dashboard.admin');
    }

    public function dashboard(){
        return view('Dashboard.dashboard');
    }
    public function newProduct(){
        return view('Dashboard.CreateProduct');
    }
}
