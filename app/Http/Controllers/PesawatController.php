<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesawatController extends Controller
{
    public function index()
    {
        return view('pesawat');
    }
}
