<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sample;

class SampleController extends Controller
{
    public function input()
    {
        return view('sample.input');
    }

    public function save(Request $request)
    {
        $input_content = new Sample();
        $input_content->content = $request['content'];
        $input_content->save();

        return \redirect('/');
    }
}
