<?php

namespace App\Http\Controllers\Admin\Asriwulandari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Asriwulandari\Gallery;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::get();
        return view('admin.asriwulandari.gallery.index', ['galleries' => $galleries]);
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
        $galleries = new Gallery;
        $galleries->title = $request->input('title');
        $galleries->slug = str_slug($request->input('title'));
        $galleries->image = '';
        $galleries->save();

        $filename = $galleries->id . '-' . $galleries->slug;

        $galleries->image =  $filename . '-' . rand(1,9) . '.' . $request->file('file')->getClientOriginalExtension();
        Storage::disk('local')->put('public/asriw/gallery/' . $galleries->image, File::get($request->file('file')));
        
        $galleries->save();

        return response()->json($galleries);
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
        $galleries = Gallery::where('id', $id)->first();
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
        $galleries = Gallery::where('id', $id)->first();
        $galleries->title = $request->input('title');
        $galleries->slug = str_slug($request->input('title'));

        if ($request->file('file') != null) {
            Storage::disk('local')->delete('public/asriw/gallery/' . $galleries->image);
            $galleries->image =  $galleries->id . '-' . str_slug($galleries->title) . '-' . rand(1,9) . '.' . $request->file('file')->getClientOriginalExtension();
            Storage::disk('local')->put('public/asriw/gallery/' . $galleries->image, File::get($request->file('file')));
        }

        $galleries->save();

        return response()->json($galleries);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galleries = Gallery::where('id', $id)->first();
        Storage::disk('local')->delete('public/asriw/gallery/' . $galleries->image);
        $galleries->delete();

        return response()->json($galleries);
    }
}
