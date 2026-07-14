<?php

namespace App\Models;

use Dom\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];

    //1つのPostに多くのCommentがつく
    public function comments()
    {
        return $this->hasMany('\App\Models\Comment');
    }

    //1つのPostに多くのタグがつく。逆もしかり
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
