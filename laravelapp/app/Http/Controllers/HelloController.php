<?php

namespace App\Http\Controllers;

// いわゆるimport文
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/** validater */
use App\Http\Requests\HelloRequest;

class HelloController extends Controller
{
    public function index(Request $request) {

        return view('hello.index', ['msg' => 'フォームを入力：']);
    }

    public function post(HelloRequest $request) {
        return view('hello.index', ['msg' => '正しく入力されました!']);
    }
}
