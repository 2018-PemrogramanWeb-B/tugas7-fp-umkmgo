<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class mypostController extends Controller
{
    public function index(){
        //get all data from post table
        //$posts = Post::all()->paginate(3);
        //return $posts;
        //return view ('cari', compact('posts'));
        $users = Auth::id();
        $posts = DB::table('posts')->where('users_id', $users)->paginate(3);

        return view('posts.mycari', ['posts' => $posts]);
    }
}
