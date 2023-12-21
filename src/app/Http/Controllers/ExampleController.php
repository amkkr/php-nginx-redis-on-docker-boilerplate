<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    public function handle()
    {
        return \response()
            ->json([
                'id' => 'aaa',
                'name' => 'aadfas',
            ]);
    }
}
