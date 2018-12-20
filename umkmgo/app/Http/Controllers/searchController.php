<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class searchController extends Controller
{
    public function index($id){
        //get all data from post table
        //$posts = Post::all()->paginate(3);
        //return $posts;
        //return view ('cari', compact('posts'));
        $posts = DB::table('posts')->where('label', $id)->paginate(3);

        return view('posts.mycari', ['posts' => $posts]);
    }
}
