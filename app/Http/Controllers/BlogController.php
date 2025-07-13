<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;


class BlogController extends Controller
{

    // 1.（M）Blog　Modelを呼び出す
    // 2. (C) ControllerからBladeに渡す
    // 3. (V) Bladeで表示する
    /**
     * ブログ一覧を表示する
     * 
     * ＠return view
     */
    public function showList()
    {
        $blogs = Blog::all();

        // dd($blogs);

        return view('blog.list', ['blogs' => $blogs]);
    }
}
