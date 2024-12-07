<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Models\Category;
use App\Models\Spotify;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class WebController extends Controller
{
    
    public function index()
    {
        $posts = Post::all();
        $other = Post::inRandomOrder()->limit(10)->get();
        $spotify = Spotify::all();

        return response(view('admin.post.index', ['spotify' => $spotify, 'other' => $other, 'posts' => $posts]));
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$players = DB::table('players')
		->where('shirt','like',"%".$search."%")->orwhere('position','like',"%".$search."%")
        ->orwhere('nation','like',"%".$search."%")->orwhere('club','like',"%".$search."%")
		->orwhere('name','like',"%".$search."%")->paginate(20);
 
    		// mengirim data pegawai ke view index
		return view('admin.player.index',['player' => $players]);
 
	}

    public function create(): Response
    {
        $categories = Category::orderBy('name', 'asc')->get()->pluck('name', 'id');
        $other = Post::inRandomOrder()->limit(10)->get();
        $spotify = Spotify::all();
        return response(view('admin.post.create', ['spotify' => $spotify, 'other'=> $other, 'categories' => $categories]));
    }

    public function store(StorePostRequest $request): RedirectResponse
    {
        {
            $params = $request->validated();

            // Image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/images', $fileName);

         
        }

            if ($post = Post::create([
               
                    'embed' => $request->embed,
                    'title' => $request->title,
                    'body' => $request->body,
                    'author' => $request->author,
                    'slug' => Str::slug($request->title, '-'),
                    'image' => $fileName,
                    'tag' => $request->tag,
                
            ])); {
                $post->categories()->sync($params['category_ids']);
    
                return redirect(route('post.index'))->with('success', 'Added!');
            }
        }
    

    public function edit(string $id): Response
    {
        $product = Post::findOrFail($id);
        $categories = Category::orderBy('name', 'asc')->get()->pluck('name', 'id');
        $other = Post::inRandomOrder()->limit(10)->get();
        $spotify = Spotify::all();

        return response(view('admin.post.edit', ['spotify' => $spotify, 'other' => $other, 'product' => $product, 'categories' => $categories]));
    }

    public function update(UpdatePostRequest $request, string $id): RedirectResponse
    {
        $product = Post::findOrFail($id);
        $params = $request->validated();

        if ($product->update([
            'embed' => $request->embed,
            'title' => $request->title,
            'body' => $request->body,
            'author' => $request->author,
            'slug' => Str::slug($request->title, '-'),
            'tag' => $request->tag,
        ])) {
            $product->categories()->sync($params['category_ids']);

            return redirect(route('post.index'))->with('success', 'Updated!'); 
        }
    }

    public function destroy(string $id): RedirectResponse
    {
        $post = Post::findOrFail($id);
        $post->categories()->detach();

        if ($post->delete()) {
            return redirect(route('post.index'))->with('success', 'Deleted!');
        }

        return redirect(route('post.index'))->with('error', 'Sorry, unable to delete this!');
    }

}
