<?php

namespace App\Http\Controllers\Admin\Biodegum;

use App\BiodegumPortfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Image;

use Illuminate\Support\Debug\Dumper;

class BiodegumPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = BiodegumPortfolio::orderby('created_at','desc')->get();
        return view('admin.biodegum.portfolio.index')->with('images', $images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $input = $request->all();
        $portfolio = new BiodegumPortfolio;
        $portfolio->title = $input['title'];
        $portfolio->subtitle = $input['subtitle'];
        $portfolio->slug = str_slug($request->input('title'));
        $portfolio->description = $input['description'];
        $portfolio->image_source = "default.jpg";
        $portfolio->save();

        $file=json_decode($input['file']);

        if($file[0] != ""){
            $ext = explode(".", $file[0]);
            $tmpFile = storage_path('app\asriwulandari\tmp\\').$file[0];
            $newFile = 'portfolio-'.$portfolio->id.'.'.$ext[1];
            $img = Image::make($tmpFile);
            $img->resize(1280, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(public_path('images/biodegum/portfolio/').$newFile);
            unlink($tmpFile);
            $portfolio->image_source = $newFile;
            $portfolio->save();
        }
        $portfolio->image_source = $portfolio->image();
        return response()->json($portfolio);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = BiodegumPortfolio::where('id', $id)->first();
        return response()->json($portfolio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $portfolio = BiodegumPortfolio::where('id', $id)->first();
        $portfolio->title = $input['title'];
        $portfolio->subtitle = $input['subtitle'];
        $portfolio->slug = str_slug($input['title']);

        $file=json_decode($input['file']);

        if ($file[0] != "") {
            Storage::disk('local')->delete(public_path('images/biodegum/portfolio/') . $portfolio->image_source);
            $tmpFile = storage_path('app\asriwulandari\tmp\\').$file[0];
            $newimg = Image::make($tmpFile);
            $newimg->resize(1280, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $newimg->save(public_path('images/biodegum/portfolio/').$portfolio->image_source);
            unlink($tmpFile);
        }

        $portfolio->save();

        return response()->json($portfolio);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = BiodegumPortfolio::where('id', $id)->first();
        $portfolio->delete();
        return response()->json($portfolio);
    }
}
