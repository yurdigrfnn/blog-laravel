<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('Dashboard.post.index',[
            'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('Dashboard.post.create',[
            'categories' => Category::all()
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'title' => 'required:max',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'image|file|max:5128',
            'body' => 'required'
        ]);

        if ($request->file('image')){
            $validate['image'] = $request->file('image')->store('post-images');
        }

        $validate['user_id'] = auth()->user()->id;
        $validate['excerpt'] = Str::limit(strip_tags($request->body,100));

        Post::create($validate);

        return redirect('/dashboard/posts')->with('success', 'Post Berhasil di Buat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return Response
     */
    public function show(Post $post)
    {
        return view('Dashboard.post.show',[
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return Response
     */
    public function edit(Post $post)
    {
        return view('Dashboard.post.edit',[
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required:max',
            'category_id' => 'required',
            'image' => 'image|file|max:5128',
            'body' => 'required'
        ];

        if ($request->slug != $post->slug){
            $rules['slug']= 'required|unique:posts';
        }

        $validate = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldimg){
                Storage::delete($request->oldimg);
            }
            $validate['image'] = $request->file('image')->store('post-images');
        }

        $validate['user_id'] = auth()->user()->id;
        $validate['excerpt'] = Str::limit(strip_tags($request->body,100));

        Post::where('id',$post->id)->update($validate);

        return redirect('/dashboard/posts')->with('success', 'Post Berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return Response
     */



    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class,'slug',$request->title);
        return response()->json(['slug' => $slug]);
    }

    public function destroy(Post $post)
    {
        if ($post->image){
            Storage::delete($post->image);
        }
        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('success', 'Post Berhasil di hapus');
    }
}
