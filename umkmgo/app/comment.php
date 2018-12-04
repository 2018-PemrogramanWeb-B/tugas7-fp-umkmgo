<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\User;
class comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
        'users_id', 'posts_id', 'deskrip'
    ];

    public function Post()
    {
        return $this->belongsTo('App\Post', 'id');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
