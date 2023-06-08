<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $bolg_post = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "yurdiansyah",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci architecto asperiores deleniti dolores facilis laboriosam molestias? Alias asperiores delectus deserunt doloremque eius, est eveniet hic ipsum iste iure molestias, mollitia nobis optio perspiciatis possimus quasi, qui recusandae reiciendis sed unde veniam veritatis voluptate. Ad aliquam assumenda at blanditiis commodi cupiditate dolores ea esse est ex illum impedit in itaque iure, labore laboriosam laborum maxime molestiae natus nesciunt, non nulla odit pariatur placeat praesentium quaerat quis rerum ullam ut voluptatum? Vel."
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "keqing",
            "body" => "Lorem ipsum dolor sit amet, coaffffffffffffffffffffffffffffffffffffffffffnsectetur adipisicing elit. Adipisci architecto asperiores deleniti dolores facilis laboriosam molestias? Alias asperiores delectus deserunt doloremque eius, est eveniet hic ipsum iste iure molestias, mollitia nobis optio perspiciatis possimus quasi, qui recusandae reiciendis sed unde veniam veritatis voluptate. Ad aliquam assumenda at blanditiis commodi cupiditate dolores ea esse est ex illum impedit in itaque iure, labore laboriosam laborum maxime molestiae natus nesciunt, non nulla odit pariatur placeat praesentium quaerat quis rerum ullam ut voluptatum? Vel."
        ]
    ];

    public static function all(){
        return collect(self::$bolg_post);
    }

    public static function find($slug){
        $blog = static::all();
        return $blog->firstWhere('slug' , $slug);
    }
}
