<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BiodegumPosts;
use App\BiodegumPortfolio;
use App\FipulpBlog;
use App\FipulpGallery;
use Auth;

use Illuminate\Support\Debug\Dumper;

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
        $posts = BiodegumPosts::where('status',1)
            ->take(6)
            ->orderby('created_at', 'desc')
            ->get();
         $portfolio = BiodegumPortfolio::take(6)
            ->orderby('created_at', 'desc')
            ->get();
        return view('biodegum')->with([
            'posts'   => $posts,
            'portfolio' => $portfolio
        ]);
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
