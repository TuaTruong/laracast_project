<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // DB::listen(function ($query) {
    //     logger($query->sql);
    // });
    $posts = Post::latest();
    if(request("search")){
        $posts
        ->where("title","like","%".request("search")."%")
        ->orWhere("body","like","%".request("search")."%")
        ->orWhere("excerpt","like","%".request("search")."%");
    }

    return view('posts',[
        "posts" => $posts->get(),
        "categories" => Category::latest()->get(),
    ]);
}) -> name("home");

Route::get('posts/{post:slug}', function (Post $post) {
    return view('post',[
        "post" => $post,
    ]);
});

Route::get("categories/{category:slug}", function (Category $category) {
    return view("posts", [
        "posts"=> $category->posts,
        "currentCategory" => $category,
        "categories" => Category::latest()->get(),
    ]);
});

Route::get("authors/{author:username}", function (User $author) {
    return view("posts", [
        "posts"=> $author->posts,
        "categories" => Category::latest()->get(),
    ]);
});