<?php

namespace App\Http\Controllers;

use App\Models\test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $data = [
            'content' => '',
        ];
        return view('test.index', $data);
    }
    public function post(Request $request)
    {
        return 'お問い合わせありがとうございます';
    }
    public function add(Request $request)
    {
        return view('thanks');
    }
    public function create(Request $request)
    {
        $this->validate($request, test::$rules);
        $test = new tests;
        $form = $request->all();
        unset($form['_token_']);
        $test->fill($form)->save();
        return redirect('/');
    }
}
