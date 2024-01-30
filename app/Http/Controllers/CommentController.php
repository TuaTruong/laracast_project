<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function storeCommentOnPost(Post $post, Request $request){
        request()->validate([
            "body" => "required"
        ]);

        $post->comment()->create([
            "post_id" => $post->id,
            "user_id"=> auth()->user()->id,
            "body" => $request->body,
        ]);

        return back();
    }
}
