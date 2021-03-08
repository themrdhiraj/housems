<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $items = Dashboard::get();
        return view('dashboard', [
            'items'=> $items
        ]);
    }
}
