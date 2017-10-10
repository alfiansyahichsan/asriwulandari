<?php

namespace App\Http\Controllers\Admin\Asriwulandari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Asriwulandari\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::get();
        return view('admin.asriwulandari.blog.index', ['blogs' => $blogs]);
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
        $blogs = new Blog;
        $blogs->title = $request->input('title');
        $blogs->deskripsi = $request->input('deskripsi');
        $blogs->image = '';
        $blogs->link = $request->input('link');
        $blogs->category = $request->input('category');
        $blogs->save();

        $filename = $blogs->id;

        $blogs->image =  $filename . '-' . rand(1,9) . '.' . $request->file('file')->getClientOriginalName();
        Storage::disk('local')->put('public/asriw/blog/' . $blogs->image, File::get($request->file('file')));
        
        $blogs->save();

        return response()->json($blogs);
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
        $blogs = Blog::where('id', $id)->first();
        return response()->json($blogs);
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
        $blogs = Blog::where('id', $id)->first();
        $blogs->title = $request->input('title');
        $blogs->deskripsi = $request->input('deskripsi');
        $blogs->link = $request->input('link');
        $blogs->category = $request->input('category');

        if ($request->file('file') != null) {
            Storage::disk('local')->delete('public/asriw/blog/' . $blogs->image);
            $blogs->image =  $blogs->id . '-' . str_slug($blogs->title) . '-' . rand(1,9) . '.' . $request->file('file')->getClientOriginalName();
            Storage::disk('local')->put('public/asriw/blog/' . $blogs->image, File::get($request->file('file')));
        }

        $blogs->save();

        return response()->json($blogs);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = Blog::where('id', $id)->first();
        Storage::disk('local')->delete('public/asriw/blog/' . $blogs->image);
        $blogs->delete();

        return response()->json($blogs);
    }
}
