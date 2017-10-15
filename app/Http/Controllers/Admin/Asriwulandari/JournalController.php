<?php

namespace App\Http\Controllers\Admin\Asriwulandari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Asriwulandari\Journal;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;


class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journal = Journal::get();
        return view('admin.asriwulandari.journal.index', ['journal' => $journal]);
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
        $this->validate($request, [
            'file' => 'mimes:doc,pdf,docx',
        ]);

        $journal = new Journal;
        $journal->title = $request->input('title');
        $journal->detail = $request->input('detail');
        $journal->file = '';
        $journal->save();

        $journal->file = $journal->id . '-' . $request->file('file')->getClientOriginalName();
        
        $journal->save();

        Storage::disk('local')->put('public/asriw/journal/' . $journal->file, File::get($request->file('file')));

        return response()->json($journal);
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
        $journal = Journal::where('id', $id)->first();
        return response()->json($journal);
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
        $journal = Journal::where('id', $id)->first();
        $journal->title = $request->input('title');
        $journal->detail = $request->input('detail');

        if ($request->file('file') != null) {
            Storage::disk('local')->delete('public/asriw/journal/' . $journal->file);
            $journal->file =  $journal->id . '-' . rand(1,9) . '.' . $request->file('file')->getClientOriginalName();
            Storage::disk('local')->put('public/asriw/journal/' . $journal->file, File::get($request->file('file')));
        }

        $journal->save();

        return response()->json($journal);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $journal = Journal::where('id', $id)->first();
        Storage::disk('local')->delete('public/asriw/journal/' . $journal->file);
        $journal->delete();

        return response()->json($journal);
    }
}
