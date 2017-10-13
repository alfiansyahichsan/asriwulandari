<?php

namespace App\Http\Controllers\Admin\Asriwulandari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Asriwulandari\Blog;
use Illuminate\Support\Facades\File;
use Image;

use Illuminate\Support\Debug\Dumper;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role == 1) {
            $blogs = Blog::get();
        }
        else

        $blogs = Blog::where('status', Auth::user()->id)->get();
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
        $input = $request->all();
        $blogs = new Blog;
        $blogs->title = $input['title'];
        $blogs->subtitle = $input['subtitle'];
        $blogs->content = $input['content'];
        $blogs->category = $input['category'];
        $blogs->img_header = '';
        $blogs->created_by = Auth::user()->name;
        $blogs->status = Auth::user()->role;
        $blogs->save();

        $file=json_decode($input['file']);

        if($file[0] != ""){
            $ext = explode(".", $file[0]);
            $tmpFile = storage_path('app\asriwulandari\tmp\\').$file[0];
            $newFile = 'blogs-'.$blogs->id.'.'.$ext[1];
            $img = Image::make($tmpFile);
            $img->resize(1280, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(public_path('images/asriw/posts/').$newFile);
            unlink($tmpFile);
            $blogs->img_header = $newFile;
            $blogs->save();
        }

        $blogs->image_source = $blogs->image();
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
        $input = $request->all();
        $blogs = Blog::where('id', $id)->first();
        $blogs->title = $input['title'];
        $blogs->subtitle = $input['subtitle'];
        $blogs->content = $input['content'];
        $blogs->category = $input['category'];

        // if ($request->file('file') != null) {
        //     Storage::disk('local')->delete('public/asriw/blog/' . $blogs->image);
        //     $blogs->image =  $blogs->id . '-' . rand(1,9) . '.' . $request->file('file')->getClientOriginalName();
        //     Storage::disk('local')->put('public/asriw/blog/' . $blogs->image, File::get($request->file('file')));
        // }

        $file=json_decode($input['file']);
        // dump($input);

        if ($file[0] != "") {
            Storage::disk('local')->delete(public_path('images/asriw/posts/') . $blogs->img_header);
            $tmpFile = storage_path('app\asriwulandari\tmp\\').$file[0];
            $newimg = Image::make($tmpFile);
            $newimg->resize(1280, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $newimg->save(public_path('images/asriw/posts/').$blogs->img_header);
            unlink($tmpFile);
        }

        // dump($blogs);

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
        if(is_null($blogs->img_header)){

        }
        elseif($blogs->img_header){
            unlink(public_path('images/asriw/posts/'.$blogs->img_header));
        }
        
        $blogs->delete();

        return response()->json($blogs);
    }
}
