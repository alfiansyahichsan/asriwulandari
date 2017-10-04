<?php

namespace App\Http\Controllers\Admin\Asriwulandari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Asriwulandari\Achievement;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achievement = Achievement::get();
        return view('admin.asriwulandari.achievement.index', ['achievement' => $achievement]);
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
        $achievement = new Achievement;
        $achievement->title = $request->input('title');
        $achievement->slug = str_slug($request->input('title'));
        $achievement->detail = $request->input('detail');
        $achievement->save();

        return response()->json($achievement);
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
        $achievement = Achievement::where('id', $id)->first();
        return response()->json($achievement);
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
        $achievement = Achievement::where('id', $id)->first();
        $achievement->title = $request->input('title');
        $achievement->slug = str_slug($request->input('title'));
        $achievement->detail = $request->input('detail');

        $achievement->save();

        return response()->json($achievement);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $achievement = Achievement::where('id', $id)->first();
        $achievement->delete();

        return response()->json($achievement);
    }
}
