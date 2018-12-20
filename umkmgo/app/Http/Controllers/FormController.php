<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function simpan(Request $request){
        // dd($request->input());
        $yanglogin = Auth::id();
        Post::create([
            'judul' =>$request ->judul,
            'deskrip' =>$request ->deskrip,
            'alamat' =>$request ->alamat,
            'gambar' =>$request ->gambar,
            'users_id' =>$yanglogin,
            'label' =>$request->label,
        ]);

        return redirect ('/form')->with('status', 'Produk sudah Ditambahkan');
    }

    public function show($id)
    {
        $posts = Post::find($id);
        $idnya = User::find($posts->users_id);
        $comments = $posts->comment;
        $yanglogin = Auth::user();
    
        return view('posts.show', compact(['posts','idnya','comments','yanglogin']));
    }

    public function index(){
        //get all data from post table
        //$posts = Post::all()->paginate(3);
        //return $posts;
        //return view ('cari', compact('posts'));
        $posts = DB::table('posts')->paginate(3);

        return view('posts/cari', ['posts' => $posts]);
    }

    public function edit($id){
        $posts = Post::find($id);
        return view('posts.edit')->with('posts', $posts);
    }
    
    public function update(Request $request){
        $post = Post::find($request->id);
        
            $post->judul = $request->judul;
            $post->deskrip = $request ->deskrip;
            $post->alamat = $request ->alamat;
            $post->gambar = $request ->gambar;
        
        $post->save();
            return redirect('/show/'.$post->id)->with('status', 'Data Telah Diupdate');
        //return redirect('posts/edit/'.$request->id)->with('status', 'Data Telah Diupdate');
    }

    public function destroy($id){
     $posts = Post::find($id);
     $posts->delete();

     return redirect('/welcome')->with('status', 'Data Telah Terhapus');
    }
}
