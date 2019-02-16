<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Person;

class PersonController extends Controller
{
    // ユーザー一覧表示画面
    public function index(Request $request)
    {
        $items = Person::all();
        return view('person.index', ['items' => $items]);
    }

    // ユーザー検索遷移
    public function find(Request $request)
    {
        return view('person.find', ['input' => '']);
    }

    // ユーザー検索実行時
    public function search(Request $request)
    {
        $item = Person::find($request -> input);
        $param = ['input' => $request -> input, 'item' => $item];

        return view('person.find', $param);
    }
}
