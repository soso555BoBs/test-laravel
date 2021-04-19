<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogPost;

class PostController extends Controller
{
    /**
     * 新ブログポスト作成フォームの表示
     *
     * @return Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * ブログポストの保存
     *
     * @param  StoreBlogPost  $request
     * @return Response
     */
    public function store(StoreBlogPost $request)
    {
        // 送信されたリクエストは正しい

        // バリデーション済みデータの取得
        $validated = $request->validated();

        var_dump($validated);
    }
}
