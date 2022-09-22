<?php

namespace App\Controllers;

use Config\Database;
use Config\Services;
use CodeIgniter\I18n\Time;
use App\Controllers\BaseController;
use App\Models\ProfileModel;
use CodeIgniter\Model;

class User extends BaseController
{
    protected $UserModel;

    public function __construct()
    {
        $this->UserModel = new ProfileModel();
    }

    public function index()
    {
        $data = ['title' => 'Home'];
        return view('home', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'My Profile', 
            'validation' => Services::validation(),
            'user' => user(),
        ];
        return view('user/profile', $data);
    }

    public function editProfile($email)
    {
        if ($email === user()->email) {
            
            $request = Services::request();
        $validation = \Config\Services::validation();

        if (!$this->validate([
            'username' => 'required|alpha_numeric',
            'fullname' => 'required|max_length[255]',
            'user_profile' => [
                'rules' => 'max_size[user_profile,2048]|max_dims[user_profile,500,500]|mime_in[user_profile,image/jpg,image/jpeg,image/png,image/webp,image/gif]|is_image[user_profile]',
                'errors' => [
                    'max_size' => 'Image is too big [Max:2mb]',
                    'max_dims' => 'Maximal Image Dimensions [500x500]',
                    'mime_in' => '{field} Field is not a valid image',
                    'is_image' => '{field} Field is not a valid image',
                ]
            ],
        ])) {
            return redirect()->to('profile')->with('msg', ['status'=>'error','head'=>'Error 404','body'=>'Input is Not Valid'])->withInput();
        }

            $this->UserModel->editProfile($email);
            return redirect()->to('profile');
            
        } else {
            return redirect()->back()->with('msg', ['status'=>'error','head'=>'Error 404','body'=>'Page Not Found']);
        }
    }
    

}