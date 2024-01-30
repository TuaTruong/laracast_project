<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


// Route::get("/ping", function(){
//     // require_once('/path/to/MailchimpMarketing/vendor/autoload.php');
//     $mailchimp = new \MailchimpMarketing\ApiClient();

//     $mailchimp->setConfig([
//         'apiKey' => config("services.mailchimp.key"),
//         'server' => 'us21'
//     ]);

//     $response = $mailchimp->ping->get();
//     dd($response);
// });

Route::get('/', [PostController::class,"index"]) -> name("home");
Route::get('posts/{post:slug}', [PostController::class,'show']);
Route::post('posts/{post:slug}/comments', [CommentController::class,'storeCommentOnPost']);

Route::get("/register",[RegisterController::class,"create"])->middleware("guest");
Route::post("/register",[RegisterController::class,"store"])->middleware("guest");


Route::get("/login",[SessionController::class,"create"])->middleware("guest");
Route::post("/login",[SessionController::class,"store"])->middleware("guest");


Route::post("/logout",[SessionController::class,"destroy"])->middleware("auth");
Route::post("/sessions",[SessionController::class,"destroy"])->middleware("auth");


Route::get('admin/posts/create',[PostController::class,'create'])->middleware("admin");
