<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function addslot(){
        return view('pages.addslot');
    }
    public function request(){
        return view('pages.request');
    }
    public function allocation(){
        return view('pages.allocation');
    }
    public function airport(){
        return view('pages.airport');
    }
    public function atcairport(){
        return view('pages.atcairport');
    }
    public function flight(){
        return view('pages.flight');
    }
    public function addflight(){
        return view('pages.addflight');
    }
    public function iata(){
        return view('pages.iata');
    }
}
