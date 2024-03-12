<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostsController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('blog.index')
    //         ->with('posts', Post::orderBy('updated_at', 'DESC')->get());
    // }
    public function index(Request $request)
    {
        $posts = Post::query();
        $seasons = ['Spring','Summer','Autumn','Winter']; // Example seasons array, replace with your actual data

        // if ($request->has('season')) {
        //     $posts->where('season', $request->season);
        // }

        if ($request->has('season')) {
            if ($request->season != 'all') {
                $posts->where('season', $request->season);
            }
            // If 'all' is selected, don't filter by season
        }

        if ($request->has('sort')) {
            if ($request->sort == 'season_asc') {
                $posts->orderBy('season', 'asc');
            } elseif ($request->sort == 'season_desc') {
                $posts->orderBy('season', 'desc');
            }

            if ($request->sort == 'date_asc') {
                $posts->orderBy('updated_at', 'asc');
            } elseif ($request->sort == 'date_desc') {
                $posts->orderBy('updated_at', 'desc');
            }
        }

        $posts = $posts->get();

        return view('blog.index', compact('posts', 'seasons'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'season' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        Post::create([
            'title' => $request->input('title'),
            'season' => $request->input('season'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/blog')
            ->with('message', 'Your post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('blog.show')
            ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('blog.edit')
            ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'season' => 'required',
            'description' => 'required',
            
        ]);

        Post::where('slug', $slug)
            ->update([
                'title' => $request->input('title'),
                'season' => $request->input('season'),
                'description' => $request->input('description'),
                'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
                'user_id' => auth()->user()->id
            ]);

        return redirect('/blog')
            ->with('message', 'Your post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug);
        $post->delete();

        return redirect('/blog')
            ->with('message', 'Your post has been deleted!');
    }
}