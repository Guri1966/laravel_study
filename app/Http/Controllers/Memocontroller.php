<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memo;

class Memocontroller extends Controller
{

    public function show()
    {
        $memo_info = Memo::get(); // 全件取得

        return view('home')
            ->with('memo_info', $memo_info);
    }

    public function add(Request $request)
    {
        $memo_text = $request->memo_text;
        $memo_model = new Memo();
        $memo_model->content = $memo_text;
        $memo_model->save();

        return self::show();
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
