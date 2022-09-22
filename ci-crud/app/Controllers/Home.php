<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Home'];
        return view('home', $data);
    }

    public function about()
    {
        $data = ['title' => 'About'];
        return view('about', $data);
    }

    public function blog()
    {
        $data = [
            'title' => 'Blog'
        ];
        return view('blog', $data);
    }
}