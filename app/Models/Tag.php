<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    //1つのタグに多くのポストがつく。逆もしかり
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
