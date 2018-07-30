<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function getIndex()
    {

        return view('dashboard.index');
    }
}