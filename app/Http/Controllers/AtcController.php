<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtcController extends Controller
{
    public function index()
    {
        return view('atc');
    }
}
