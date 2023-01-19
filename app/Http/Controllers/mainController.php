<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;

class mainController extends Controller
{
   public function index(){
    // get user with image
        // $user = User::with('image')->first();
        // dd($user->toArray());
        $user = User::with('image')->get();
        dd($user->toArray());
    //get post with images
    // get user with image
        // $post = Post::with('image')->first();
        // dd($user->toArray());
        // $post = Post::with('image')->get();
        // dd($post->toArray());

   }
}
