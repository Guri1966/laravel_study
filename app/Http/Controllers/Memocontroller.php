<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memo;

class Memocontroller extends Controller
{
    public function show()
    {
        return view('home');
    }

    public function add(Request $request)
    {
        $memo_text = $request->memo_text;
        $memo_model = new Memo();
        $memo_model->content = $memo_text;
        $memo_model->save();

        return self::show(); // ここを書き替える
    }
}
