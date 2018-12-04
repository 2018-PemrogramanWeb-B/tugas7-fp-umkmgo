<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts'; //model ini merepresentasikan table 'post' di database
    //digunakan ketika kolom primarykey!=id 
    //protected $primaryKey = "nama id"

    //definisi kolom/ properti di table post
    protected $fillable = ['judul', 'deskrip','alamat','gambar','users_id'];

    public function comment()
    {
        return $this->hasMany('App\comment','posts_id','id');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }


}