<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memo;

class Memocontroller extends Controller
{
    public function show()
    {
        //　memosテーブルから全データを取得
        $memo_info = Memo::get();

        /**
         * データを入れた変数$memo_infoを
         * memo_infoという名前で
         * view(homo.blade.php)へ渡す
         */

        return view('home')
            ->with('memo_info', $memo_info);
        /**
         * dd($memo_info);
         * データの中身を確認    
         * controllerでもviewでも使える
         * どんなSQLが実行されているかを見ることが出来る
         * dd(Memo::tosql()); 
         */
    }


    public function add(Request $request)
    {
        $memo_text = $request->memo_text;
        $memo_model = new Memo();
        $memo_model->content = $memo_text;
        $memo_model->save();

        return self::show(); // ここを書き替える
    }

    public function delete(Request $request)
    {
        $delete_id = $request->delete_id;

        $memo_model = Memo::find($delete_id);
        $memo_model->delete();

        return self::show();
    }

    public function getEdit($edit_id)
    {
        return view('edit');
    }
}
