<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function Login(){
		return view('auth/login');
	}

	public function Home()
    {
    	return view('index');
    }

    public function biodegum()
    {
    	return view('biodegum');
    }

    public function fipulp()
    {
    	return view('fipulp');
    }

    public function detailjurnal()
    {
    	return view('detailjurnal');
    }

    public function detailblog()
    {
    	return view('detailblog');
    }
}
