<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;

class CommentsController extends Controller
{
    public function simpan(Request $request){
        // dd($request->input());
        comment::create([
            'users_id' =>$request ->users_id,
            'posts_id' =>$request->posts_id,
            'deskrip' =>$request ->deskrip,
        ]);

        return redirect()->back();
    }

    public function hapus($id){
        $comment = comment::find($id);
        $comment->delete();
        return redirect()->back();
    }

}
