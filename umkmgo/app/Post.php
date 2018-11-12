<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'pinjam'; //model ini merepresentasikan table 'post' di database
    //digunakan ketika kolom primarykey!=id 
    //protected $primaryKey = "nama id"

    //definisi kolom/ properti di table post
    protected $fillable = ['nama', 'nrp','buku','tgl_pin', 'tgl_blk'];
}