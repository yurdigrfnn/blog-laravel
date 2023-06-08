<?php

use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "activel" => "Home",
        "title" => "Home"
    ]);
});


Route::get('/about',function (){
    return view('about',[
        "title" => "About",
        "activel" =>"about",
        "name" => "yurdi",
        "email" => "keqing@gmail.com",
        "image" => "keqing.jpg"
    ]);
});



Route::get('/blog', [PostController::class,'index']);

// halaman single post

Route::get('blog/{post:slug}', [PostController::class,'show']);


// category

Route::get('/categories/',function (){
    return view('categories',[
        "activel" => "category",
        "title" => "Post Category",
        "categories" => Category::all()
    ]);
});

Route::get('/login/',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/logout',[LoginController::class,'logout']);
Route::post('/login/',[LoginController::class,'setUser']);
Route::get('/register',[RegisterController::class,'index'])->middleware('guest');

Route::post('/register',[RegisterController::class,'getUser'])->middleware('guest');

Route::get('/dashboard',function (){
    return view('Dashboard/index');
})->middleware('auth');


//Route::resource('/dashboard/posts', DashboarPostController::class)->middleware('auth');
Route::get('/dashboard/posts/checkSlug',[DashboardPostController::class,'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

