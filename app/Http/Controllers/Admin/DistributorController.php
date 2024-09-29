<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Distributor2;

class DistributorController extends Controller
{
    public function index()
    {
        $distributor2s = Distributor2::all();
        
        return view('pages.admin.distributor2.index', compact('distributor2s'));
    }
}