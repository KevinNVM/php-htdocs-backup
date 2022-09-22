<?php

namespace App\Controllers;
 

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'telp' => '081234568910',
            'email' => 'buzz.kevindarmawan.com',
            'alamat' => [
                'tipe' => 'Kantor',
                'alamat' => 'Jl. Pekanbaru 2 No. 19',
                'kota' => 'Jakarta'
            ]
        ];

        return view('pages/contact', $data);
    }
}