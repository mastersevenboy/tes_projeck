<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        //$title='OJAL';
        return view('xmanage.dashboard.index');
    }
}
