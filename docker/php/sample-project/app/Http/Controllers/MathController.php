<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MathController extends Controller
{
    public function index() {

        return \view('math.index');
    }
    
    public function add_index() {
        $data = [
            'ans' => 'answer',
        ];

        return \view('math.adder', $data);
    }

    public function add_result(Request $request, Response $response) {
        $right = $request->right;
        $left = $request->left;

        $data = [
            'ans' => ($right + $left),
        ];

        return \view('math.adder', $data);
    }

}
