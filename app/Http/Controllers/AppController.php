<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Spotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    
	public function index()
    {
        return view('welcome', [
            'list' => Post::orderBy('id', 'desc')->limit(4)->get(),
			'other' => Post::inRandomOrder()->limit(10)->get(),
            'spotify' => Spotify::all(),
            'band' => Post::orderBy('id', 'desc')->whereHas('categories.posts', function ($q) {
                $q->where('category_id', 2);
            })->limit(1)->get(),
            'features' => Post::orderBy('id', 'desc')->whereHas('categories.posts', function ($q) {
                $q->where('category_id', 1);
            })->limit(2)->get(),
            'interview' => Post::orderBy('id', 'desc')->whereHas('categories.posts', function ($q) {
                $q->where('category_id', 5);
            })->limit(2)->get(),
            'gigs' => Post::orderBy('id', 'desc')->whereHas('categories.posts', function ($q) {
                $q->where('category_id', 7);
            })->limit(2)->get(),
            'carousel' => Post::orderBy('id', 'desc')->limit(5)->get(),
            
        ]);
    }

    public function article()
    {
        return view('post.post', [
            'list' => Post::orderBy('id', 'desc')->paginate(10),
			'other' => Post::inRandomOrder()->limit(10)->get(),
            'spotify' => Spotify::all()
        ]);
    }

    public function contact()
    {
        return view('post.contact', [
            'list' => Post::orderBy('id', 'desc')->paginate(10),
			'other' => Post::inRandomOrder()->limit(10)->get(),
            'spotify' => Spotify::all()
        ]);
    }

    public function interview()
    {
        $interview = Post::whereHas('categories.posts', function ($q) {
            $q->where('category_id', 5);
        })->paginate(8);
        $other = Post::inRandomOrder()->limit(10)->get();
        $spotify = Spotify::all();
        return response(view('post.interview', ['spotify' => $spotify, 'other'=> $other, 'interview' => $interview]));
    }

    public function features()
    {
        $features = Post::whereHas('categories.posts', function ($q) {
            $q->where('category_id', 1);
        })->paginate(8);
        $other = Post::inRandomOrder()->limit(10)->get();
        $spotify = Spotify::all();

        return response(view('post.features', ['spotify' => $spotify, 'other'=> $other, 'features' => $features]));
    }

    public function gigs()
    {
        $gigs = Post::whereHas('categories.posts', function ($q) {
            $q->where('category_id', 7);
        })->paginate(8);
        $other = Post::inRandomOrder()->limit(10)->get();
        $spotify = Spotify::all();

        return response(view('post.gigs', ['spotify' => $spotify, 'other'=> $other, 'gigs' => $gigs]));
    }

	public function detail($slug){
        if ($post = Post::where('slug', $slug)->first())
        return view('post.view',[
            'post' => $post,
			'other' => Post::inRandomOrder()->limit(10)->get(),
            'spotify' => Spotify::all()
        ]);
        else
        return abort(404);

    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$band = DB::table('posts')
		->where('title','like',"%".$search."%")->orwhere('body','like',"%".$search."%")->paginate(10);
        $spotify = Spotify::all();
        $other = Post::inRandomOrder()->limit(10)->get();
    		// mengirim data pegawai ke view index
		return view('post.search',['other' => $other, 'spotify' => $spotify, 'band' => $band]);
 
	}
	
}
