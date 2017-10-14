<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Debug\Dumper;

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
        $total["posts"] = \App\Models\Asriwulandari\Blog::count();
        $total["view"] = \App\Visitor::count();
        $total["click"] = \App\Click::count();
    	return view('admin.index')->with('total', $total);
    }

    public function sorry()
    {
    	return view('admin.sorry');
    }

    public function Upload(Request $request){
        $listFile = array();
        $rules = array('image' => 'required | image | max:2000'); 
        $fileCount = $request->fileCount;

        for ($i = 1; $i <= $fileCount ; $i++){
            $fileName = "";
            if($request->file('file-'.$i)){

                $img = $request->file('file-'.$i);
                $file = array('image' => $img);
                $validator = Validator::make($file, $rules);
               

                if ($img->isValid() && !$validator->fails()) {
                    $extension = $img->getClientOriginalExtension(); 
                    $fileName = rand(111111,999999).'.'.$extension; 
                    $img->storeAs('asriwulandari/tmp/', $fileName);
        
                }
                     
            }
            array_push($listFile, $fileName);
        }

        return response()->json($listFile);
    }
}
