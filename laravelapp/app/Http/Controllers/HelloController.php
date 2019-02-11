<?php

namespace App\Http\Controllers;

// いわゆるimport文
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request) {

        // $data = [
        //     ['name' => '山田太郎', 'mail' => 'taro@hoge'],
        //     ['name' => '田中はなこ', 'mail' => 'hanako@hoge'],
        //     ['name' => '鈴木五郎', 'mail' => 'goro@hoge'],
        // ];

        return view('hello.index', ['message' => 'Hello!']);
    }

    public function post(Request $request) {
        $msg = $request -> msg;

        $data = [
            'msg' => 'こんにちは' . $msg . 'さん',
        ];

        return view('hello.index', $data);
    }
}
