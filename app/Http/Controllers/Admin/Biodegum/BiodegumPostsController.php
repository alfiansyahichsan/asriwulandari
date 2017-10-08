<?php

namespace App\Http\Controllers\Admin\Biodegum;

use App\BiodegumPosts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Image;

use Illuminate\Support\Debug\Dumper;

class BiodegumPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = BiodegumPosts::orderby('created_at','desc')->get();
        return view('admin.biodegum.posts.index', [
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
        $post = new BiodegumPosts;
        $post->title = $input['title'];
        $post->subtitle = $input['subtitle'];
        $post->content = $input['content'];
        $post->img_header = "default.jpg";
        $post->created_by = Auth::user()->id;
        $post->status = 1;
        $post->save();

        $file=json_decode($input['file']);

        if($file[0] != ""){
            $ext = explode(".", $file[0]);
            $tmpFile = storage_path('app\asriwulandari\tmp\\').$file[0];
            $newFile = 'posts-'.$post->id.'.'.$ext[1];
            $img = Image::make($tmpFile);
            $img->resize(1280, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(public_path('images/biodegum/posts/').$newFile);
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
        $post = BiodegumPosts::where('id', $id)->first();
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
        $post = BiodegumPosts::where('id', $id)->first();
        $post->title = $input['title'];
        $post->subtitle = $input['subtitle'];
        $post->content = $input['content'];

        $file=json_decode($input['file']);

        if ($file[0] != "") {
            $ext = explode(".", $file[0]);
            $newFile = 'post-'.$post->id.'.'.$ext[1];

            Storage::disk('local')->delete(public_path('images/biodegum/post/') . $post->img_header);
            $tmpFile = storage_path('app\asriwulandari\tmp\\').$file[0];
            // dump($tmpFile);
            $newimg = Image::make($tmpFile);
            $newimg->resize(1280, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $post->img_header = $newFile;
            $newimg->save(public_path('images/biodegum/posts/').$post->img_header);
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
        $post = BiodegumPosts::where('id', $id)->first();
        $post->delete();
        return response()->json($post);
    }
}
