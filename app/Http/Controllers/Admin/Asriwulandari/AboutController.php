<?php

namespace App\Http\Controllers\Admin\Asriwulandari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Asriwulandari\About;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::get();
        return view('admin.asriwulandari.about.index', ['about' => $about]);
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
        $about = new About;
        $about->name = $request->input('name');
        $about->detail = $request->input('detail');
        $about->image = '';
        $about->save();

        $filename = $about->id;

        $about->image =  $filename . '-' . $request->file('file')->getClientOriginalName();
        Storage::disk('local')->put('public/asriw/page/' . $about->image, File::get($request->file('file')));
        
        $about->save();

        return response()->json($about);
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
        $about = About::where('id', $id)->first();
        return response()->json($about);
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
        $about = About::where('id', $id)->first();
        $about->name = $request->input('name');
        $about->detail = $request->input('detail');

        if ($request->file('file') != null) {
            Storage::disk('local')->delete('public/asriw/about/' . $about->image);
            $about->image =  $about->id . '-' . $request->file('file')->getClientOriginalName();
            Storage::disk('local')->put('public/asriw/about/' . $about->image, File::get($request->file('file')));
        }

        $about->save();

        return response()->json($about);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
