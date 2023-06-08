<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = '';

        if (request('category')){
            $category = Category::firstWhere('slug',request('category'));
            $title = ' di ' . $category->name;
        }
        if (request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' oleh ' . $author->name;
        }



        return view('post',[
                "title" => "Semua Postingan" . $title,
               // "posts" => Post::all()
                "posts" => Post::latest()->Filter(\request(['search', 'category','author']))->paginate(5)->withQueryString(),
                "activel" => 'post'

            ]
        );
    }
    public function show(Post $post){
        return view('blog',[
            "activel" => "post",
            "title" => "single post",
            "post"=> $post
        ]);
    }
}
