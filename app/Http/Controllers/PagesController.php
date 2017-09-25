<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function biodegum()
    {
    	return view('biodegum');
    }

    public function fipulp()
    {
    	return view('fipulp');
    }
}
