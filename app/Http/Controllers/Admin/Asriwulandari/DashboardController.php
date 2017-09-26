<?php

namespace App\Http\Controllers\Admin\Asriwulandari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
    	return view('admin.asriwulandari.index');
    }
}
