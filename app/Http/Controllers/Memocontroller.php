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

        return redirect('/');
    }

    public function delete(Request $request)
    {
        $delete_id = $request->delete_id;

        $memo_model = Memo::find($delete_id);

        if (!$memo_model) {
            return redirect('/')
                ->with('error', '指定されたメモは存在しません');
        }

        $memo_model->delete();

        return redirect('/')->with('success', '削除しました');
    }


    public function getEdit($edit_id)
    {
        $memo_info = Memo::find($edit_id); //Idでメモを1件取得
        return view('edit')
            ->with('memo_info', $memo_info); //ビューに渡す

    }


    public function postEdit(Request $request)
    {
        $edit_id = $request->edit_id;
        $edit_memo = $request->edit_memo;

        $memo = Memo::find($edit_id);
        if ($memo) {
            $memo->content = $edit_memo;
            $memo->save();
        }

        return redirect('/');
    }

    public function find(Request $request)
    {
        $search_word = $request->input('search_word');
        $memo_info = Memo::where('content', 'like', '%' . $search_word . '%')->get();
        return view('home')->with('memo_info', $memo_info);
    }
}
