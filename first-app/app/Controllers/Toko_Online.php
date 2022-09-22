<?php 

namespace App\Controllers;

use App\Controllers\BaseController;


class Toko_Online extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Toko Online'
        ];

        return view('apps/toko_online/index', $data);
    }

    public function search()
    {
        $data = [
            'title' => 'Search',
        ];

        return view('apps/toko_online/search', $data);
    }

    public function product($slug)
    {
        $data = [
            'title' => $slug,
            'slug' => $slug,
        ];

        return view('apps/toko_online/product', $data);
    }

    public function category()
    {
        $data = [
            'title' => 'Category List',
        ];

        return view('apps/toko_online/category_view', $data);
    }

    public function addnew()
    {
        $data = [
           'title' => "Add New Product", 
        ];

        return view('apps/toko_online/addnew', $data);
    }

}