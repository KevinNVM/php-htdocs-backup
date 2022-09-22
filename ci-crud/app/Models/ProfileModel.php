<?php

namespace App\Models;

use Config\Database;
use Config\Services;
use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class ProfileModel extends Model
{
    protected $db;
    protected $table = 'users';

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function editProfile($email)
    {           
        $request = Services::request();
        $validation = \Config\Services::validation();
           
        $img = $request->getFile('user_profile');
        $imgErr = $img->getError();
        $imgHasMoved = $img->hasMoved();
        $imgTemp = $img->getTempName();
        $imgSize = $img->getSizeByUnit('mb');
        $imgNameNew = $img->getRandomName();
        $imgName = $img->getName();

        if ($img->getError() == 4) {
            $imgNameNew = 'img_avatar1.png';
        } else {
            if ($img->move('img', $imgNameNew)) {
                // Succees
            } else {
                return redirect()->back()->with('msg', ['head'=>'Failed', 'body'=>'Your Changes Has Not Been Saved','status'=>'error']);
            }
        }

        $data = [
            'fullname' => $request->getVar('fullname'),
            'username' => $request->getVar('username'),
            'user_profile' => $imgNameNew,
            'updated_at' => Time::now('Asia/Jakarta', 'id_ID'),
        ];

        $builder = $this->db->table($this->table);
        $builder->where('email', $email);
        if($builder->update($data)) {
            $flashContent = ['head'=>'Success', 'body'=>'Profile Updated!','status'=>'success'];
        } else {
            $flashContent = ['head'=>'Error', 'body'=>'Something Went Wrong, Your Changes Has Not Been Saved', 'status'=>'error'];
        }

        session()->setFlashdata('msg', $flashContent);
    }
}