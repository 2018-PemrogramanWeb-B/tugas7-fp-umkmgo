<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class FormController extends Controller
{
    public function simpan(Request $request){
        Post::create([
            'nama' =>$request ->nama,
            'nrp' =>$request ->nrp,
            'buku' =>$request ->buku,
            'tgl_pin' =>$request ->tgl_pin,
            'tgl_blk' =>$request ->tgl_blk
        ]);

        return redirect ('/form')->with('status', 'Terima Kasih Sudah Meminjam!');
    }

    public function index(){
        //get all data from post table
        $posts = Post::all();
        //return $posts;
        return view ('table', ['posts'=>$posts]);
    }
    public function edit($id){
        $post = Post::find($id);
        return view('edit')->with('post', $post);
    }
    
    public function update(Request $request){
        $post = Post::find($request->id);
        
            $post->nama=$request->nama;
            $post->nrp=$request->nrp;
            $post->buku=$request->buku;
            $post->tgl_pin=$request->tgl_pin;
            $post->tgl_blk=$request->tgl_blk;
        
        $post->save();

        return redirect('/edit/'.$request->id)->with('status', 'Data Telah Diupdate');
    }

    public function destroy($id){
     $posts = Post::find($id);
     $posts->delete();

     return redirect('/table')->with('status', 'Data Telah Terhapus');
    }
}
