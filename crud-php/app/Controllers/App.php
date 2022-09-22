<?php 

namespace App\Controllers;

class App extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'App',
        ];
        return view('index/app', $data);
    }

    public function new()
    {
        $data = [
            'title' => 'App',
        ];
        return view('index/new', $data);
    }
}