<?php

namespace App\Http\Controllers\Admin\Asriwulandari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Asriwulandari\HasilRiset;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class HasilRisetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hasilriset = HasilRiset::get();
        return view('admin.asriwulandari.hasilriset.index', ['hasilriset' => $hasilriset]);
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
        $hasilriset = new HasilRiset;
        $hasilriset->title = $request->input('title');
        $hasilriset->deskripsi = $request->input('deskripsi');
        $hasilriset->link = $request->input('link');
        $hasilriset->image = '';
        $hasilriset->save();

        $filename = $hasilriset->id . '-' . $hasilriset->slug;

        $hasilriset->image =  $filename . '-' . rand(1,9) . '.' . $request->file('file')->getClientOriginalExtension();
        Storage::disk('local')->put('public/asriw/hasilriset/' . $hasilriset->image, File::get($request->file('file')));
        
        $hasilriset->save();

        return response()->json($hasilriset);
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
        $hasilriset = HasilRiset::where('id', $id)->first();
        return response()->json($hasilriset);
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
        $hasilriset = HasilRiset::where('id', $id)->first();
        $hasilriset->title = $request->input('title');
        $hasilriset->deskripsi = $request->input('deskripsi');
        $hasilriset->link = $request->input('link');

        if ($request->file('file') != null) {
            Storage::disk('local')->delete('public/asriw/hasilriset/' . $hasilriset->image);
            $hasilriset->image =  $hasilriset->id . '-' . str_slug($hasilriset->title) . '-' . rand(1,9) . '.' . $request->file('file')->getClientOriginalExtension();
            Storage::disk('local')->put('public/asriw/hasilriset/' . $hasilriset->image, File::get($request->file('file')));
        }

        $hasilriset->save();

        return response()->json($hasilriset);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hasilriset = HasilRiset::where('id', $id)->first();
        Storage::disk('local')->delete('public/asriw/hasilriset/' . $hasilriset->image);
        $hasilriset->delete();

        return response()->json($hasilriset);
    }
}
