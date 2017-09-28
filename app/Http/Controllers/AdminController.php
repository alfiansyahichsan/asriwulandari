<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function redirect(){
               
        if(Auth::check()){
            
            if(Auth::user()->role == 2)
                return redirect()->route('asridashboard');
            
            else if(Auth::user()->role == 3)
                return redirect()->route('biodegumdashboard');

                else if(Auth::user()->role == 4)
                return redirect()->route('fipulpdashboard');
            
        }
        return redirect()->route('admindashboard');
    }

    public function index()
    {
    	return view('admin.index');
    }

    public function sorry()
    {
    	return view('admin.sorry');
    }
}
