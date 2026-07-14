<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //indexメソッド（一覧表示）
    public function index(Request $request)
    {
        // クエリのビルダー（準備段階）を作る
        $query = Post::with(['tags'])->withCount('comments')->latest();

        // もし URL に「?tag=〇〇」という絞り込みの指定があれば、クエリを追加する
        if ($request->filled('tag')) {
            $tagName = $request->input('tag');

            // 多対多のリレーション先（tags）のテーブルの条件で絞り込む
            $query->whereHas('tags', function ($q) use ($tagName) {
                $q->where('name', $tagName);
            });
        }

        // get() でデータを取得する
        $posts = $query->get();

        return view('posts.index', compact('posts'));
    }

    //showメソッド(Postの詳細表示)
    public function show(Post $post)
    {
        // 紐づいているタグやコメントもロードしておく
        $post->load(['tags', 'comments']);

        return view('posts.show', compact('post'));
    }
}
