<?php

namespace App\Controllers;

class Apps extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Apps',
        ];

        return view('apps', $data);
    }

}