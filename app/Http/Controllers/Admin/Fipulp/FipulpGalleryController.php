<?php

namespace App\Http\Controllers\Admin\Fipulp;

use App\FipulpGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Image;

use Illuminate\Support\Debug\Dumper;

class FipulpGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = FipulpGallery::orderby('created_at','desc')->get();
        return view('admin.fipulp.gallery.index')->with('images', $images);
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
        $gallery = new FipulpGallery;
        $gallery->title = $input['title'];
        $gallery->subtitle = $input['subtitle'];
        $gallery->slug = str_slug($request->input('title'));
        $gallery->description = $input['description'];
        $gallery->image_source = "default.jpg";
        $gallery->save();

        $file=json_decode($input['file']);

        if($file[0] != ""){
            $ext = explode(".", $file[0]);
            $tmpFile = storage_path('app\asriwulandari\tmp\\').$file[0];
            $newFile = 'gallery-'.$gallery->id.'.'.$ext[1];
            $img = Image::make($tmpFile);
            $img->resize(1280, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(public_path('images/fipulp/gallery/').$newFile);
            unlink($tmpFile);
            $gallery->image_source = $newFile;
            $gallery->save();
        }
        $gallery->image_source = $gallery->image();
        return response()->json($gallery);
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
        $galleries = FipulpGallery::where('id', $id)->first();
        return response()->json($galleries);
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
        $gallery = FipulpGallery::where('id', $id)->first();
        $gallery->title = $input['title'];
        $gallery->subtitle = $input['subtitle'];
        $gallery->slug = str_slug($input['title']);

        $file=json_decode($input['file']);

        if ($file[0] != "") {
            Storage::disk('local')->delete(public_path('images/fipulp/gallery/') . $gallery->image_source);
            $tmpFile = storage_path('app\asriwulandari\tmp\\').$file[0];
            $newimg = Image::make($tmpFile);
            $newimg->resize(1280, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $newimg->save(public_path('images/fipulp/gallery/').$gallery->image_source);
            unlink($tmpFile);
        }

        $gallery->save();

        return response()->json($gallery);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = FipulpGallery::where('id', $id)->first();
        $gallery->delete();
        return response()->json($gallery);
    }
}
