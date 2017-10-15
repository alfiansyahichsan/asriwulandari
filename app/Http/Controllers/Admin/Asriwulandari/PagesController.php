<?php

namespace App\Http\Controllers\Admin\Asriwulandari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Asriwulandari\PageSetting;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = PageSetting::get();
        return view('admin.asriwulandari.pagesetting.index', ['pages' => $pages]);
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
        $pages = new PageSetting;
        $pages->title = $request->input('title');
        $pages->image = '';
        $pages->save();

        $filename = $pages->id;

        $pages->image =  $filename . '-' . $request->file('file')->getClientOriginalName();
        Storage::disk('local')->put('public/asriw/page/' . $pages->image, File::get($request->file('file')));
        
        $pages->save();

        return response()->json($pages);
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
        $pages = PageSetting::where('id', $id)->first();
        return response()->json($pages);
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
        $pages = PageSetting::where('id', $id)->first();

        if ($request->file('file') != null) {
            Storage::disk('local')->delete('public/asriw/page/' . $pages->image);
            $pages->image =  $pages->id . '-' . $request->file('file')->getClientOriginalName();
            Storage::disk('local')->put('public/asriw/page/' . $pages->image, File::get($request->file('file')));
        }

        $pages->save();

        return response()->json($pages);
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
