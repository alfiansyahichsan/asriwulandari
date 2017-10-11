<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BiodegumPosts;
use App\BiodegumPortfolio;
use App\BiodegumPages;
use App\FipulpBlog;
use App\FipulpGallery;
use App\FipulpPages;
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
        $page = \App\Models\Asriwulandari\PageSetting::where('title', 'slider')->first()->image;
        $achieve = \App\Models\Asriwulandari\PageSetting::where('title', 'achievement')->first()->image;
        $journal = \App\Models\Asriwulandari\PageSetting::where('title', 'journal')->first()->image;
        $jurnal = \App\Models\Asriwulandari\Journal::get();
        $blog = \App\Models\Asriwulandari\Blog::orderBy('id', 'DESC')->paginate(3);
        return view('index',[
            'achievement' => $achievement,
            'about' => $about,
            'riset' => $riset,
            'gallery' => $gallery,
            'page' => $page,
            'achieve' => $achieve,
            'journal' => $journal,
            'jurnal' => $jurnal,
            'blog' => $blog,
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
        $bgslider = BiodegumPages::where('title', 'slider')->first()->image;
        $bgportfolio = BiodegumPages::where('title', 'portfolio')->first()->image;
        $bginstagram = BiodegumPages::where('title', 'instagram')->first()->image;
        $bgcontact = BiodegumPages::where('title', 'contact')->first()->image;
        return view('biodegum')->with([
            'posts'   => $posts,
            'portfolio' => $portfolio,
            'bgslider' => $bgslider,
            'bgportfolio' => $bgportfolio,
            'bginstagram' => $bginstagram,
            'bgcontact' => $bgcontact
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
        $bgslider = \App\Http\FipulpPages::where('title', 'slider')->first()->image;
        $bgteam = \App\Http\FipulpPages::where('title', 'team')->first()->image;
        $bgcontact = \App\Http\FipulpPages::where('title', 'contact')->first()->image;
    	return view('fipulp')->with([
            'posts'   => $posts,
            'gallery' => $gallery,
            'bgslider' => $bgslider,
            'bgteam' => $bgteam,
            'bgcontact' => $bgcontact,
        ]);
    }

    public function detailjurnal($slug, $param)
    {
    	$jurnal = \App\Models\Asriwulandari\Journal::where('slug', $slug)->first();
        $next = \App\Models\Asriwulandari\Journal::where('id','>',$param)->first();
        $previous = \App\Models\Asriwulandari\Journal::where('id','<',$param)->first();
        return view('detailjurnal', [
            'jurnal' => $jurnal,
            'next' => $next,
            'previous' => $previous
        ]);
    }

    public function blog()
    {
    	return view('listblog');
    }

    public function detailblog($param)
    {
        $detailblog = \App\Models\Asriwulandari\Blog::where('id', $param)->first();
        $next = \App\Models\Asriwulandari\Blog::where('id','>',$param)->first();
        $previous = \App\Models\Asriwulandari\Blog::where('id','<',$param)->first();
        $recent = \App\Models\Asriwulandari\Blog::orderby('id','desc')->whereNotIn('id', [$param])->get();
        $ab = \App\Models\Asriwulandari\About::get()->first();
        return view('detailblog',[
            'detailblog' => $detailblog,
            'next' => $next,
            'previous' => $previous,
            'recent' => $recent,
            'ab' => $ab
        ]);
    }

}
