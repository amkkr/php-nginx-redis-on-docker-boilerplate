<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    public function handle(int $number = 0)
    {
        return \response()
            ->json([
                'id' => 'aaa',
                'name' => 'aadfas',
                'number' => $number
            ]);
    }
}
