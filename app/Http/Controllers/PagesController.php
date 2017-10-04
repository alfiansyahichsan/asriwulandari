<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FipulpBlog;
use App\FipulpGallery;
use Auth;

class PagesController extends Controller
{

	public function Home()
    {
        $achievement = \App\Models\Asriwulandari\Achievement::get();
        $about = \App\Models\Asriwulandari\About::get();
        $riset = \App\Models\Asriwulandari\HasilRiset::get();
        $gallery = \App\Models\Asriwulandari\Gallery::get();
    	return view('index',[
            'achievement' => $achievement,
            'about' => $about,
            'riset' => $riset,
            'gallery' => $gallery,
        ]);
    }

    public function biodegum()
    {
    	return view('biodegum');
    }

    public function fipulp()
    {
        $posts = FipulpBlog::where('status',1)
            ->take(6)
            ->orderby('created_at', 'desc')
            ->get();
        $gallery = FipulpGallery::take(6)
            ->orderby('created_at', 'desc')
            ->get();
    	return view('fipulp')->with([
            'posts'   => $posts,
            'gallery' => $gallery
        ]);
    }

    public function detailjurnal()
    {
    	return view('detailjurnal');
    }

    public function blog()
    {
    	return view('listblog');
    }

    public function detailblog()
    {
        return view('detailblog');
    }

}
