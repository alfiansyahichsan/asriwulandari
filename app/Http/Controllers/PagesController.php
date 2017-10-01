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
    	return view('index');
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

    public function detailblog()
    {
    	return view('detailblog');
    }
}
