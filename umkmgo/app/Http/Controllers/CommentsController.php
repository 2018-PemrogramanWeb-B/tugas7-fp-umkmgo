<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;

class CommentsController extends Controller
{
    public function simpan(Request $request){
        // dd($request->input());
        Post::create([
            'judul' =>$request ->judul,
            'deskrip' =>$request ->deskrip,
            'alamat' =>$request ->alamat,
            'gambar' =>$request ->gambar,
        ]);

        return redirect ('/form')->with('status', 'Produk sudah Ditambahkan');
    }
}
