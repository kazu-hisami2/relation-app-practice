<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body', 'post_id'];
    // 親（Post）へのリレーション設定
    public function posts()
    {
        // 特定の1つの投稿に属している
        return $this->belongsTo(Post::class);
    }

}
