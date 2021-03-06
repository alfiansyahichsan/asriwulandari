<?php

namespace App\Http\Controllers\Admin\Fipulp;

use App\Models\Asriwulandari\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Image;

use Illuminate\Support\Debug\Dumper;

class FipulpPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role == 1) {
            $posts = Blog::get();
        }
        else
        $posts = Blog::orderby('created_at','desc')->where('status', 4)->get();
        return view('admin.fipulp.posts.index', [
            'posts' => $posts
            ]);
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
        $post = new Blog;
        $post->title = $input['title'];
        $post->slug = str_slug($input['title']);
        $post->subtitle = $input['subtitle'];
        $post->content = $input['content'];
        $post->category = $input['category'];
        $post->img_header = "default.jpg";
        $post->created_by = Auth::user()->name;
        $post->status = Auth::user()->role;
        $post->save();

        $file=json_decode($input['file']);

        if($file[0] != ""){
            $ext = explode(".", $file[0]);
            $tmpFile = storage_path('app\asriwulandari\tmp\\').$file[0];
            $newFile = 'post-'.$post->id.'.'.$ext[1];
            $img = Image::make($tmpFile);
            $img->resize(1280, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(public_path('images/asriw/posts/').$newFile);
            unlink($tmpFile);
            $post->img_header = $newFile;
            $post->save();
        }
        $post->image_source = $post->image();
        return response()->json($post);
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
        $post = Blog::where('id', $id)->first();
        return response()->json($post);
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
        $post = Blog::where('id', $id)->first();
        $post->title = $input['title'];
        $post->slug = str_slug($input['title']);
        $post->subtitle = $input['subtitle'];
        $post->content = $input['content'];
        $post->category = $input['category'];

        $file=json_decode($input['file']);

        if ($file[0] != "") {
            $ext = explode(".", $file[0]);
            $newFile = 'post-'.$post->id.'.'.$ext[1];

            Storage::disk('local')->delete(public_path('images/asriw/posts/') . $post->img_header);
            $tmpFile = storage_path('app\asriwulandari\tmp\\').$file[0];
            // dump($tmpFile);
            $newimg = Image::make($tmpFile);
            $newimg->resize(1280, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $post->img_header = $newFile;
            $newimg->save(public_path('images/asriw/posts/').$post->img_header);
            unlink($tmpFile);
        }

        $post->save();

        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Blog::where('id', $id)->first();
        $post->delete();
        return response()->json($post);
    }
}
