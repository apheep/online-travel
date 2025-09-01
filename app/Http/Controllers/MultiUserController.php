<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiUserController extends Controller
{
    public function checking()
    {
        return view('check');
    }

    public function ticketing()
    {
        return view('tiket');
    }
}
