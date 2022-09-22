<?php

namespace App\Models;

use Config\Database;
use Config\Services;
use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'users';
    protected $db;

    public function __construct()
    {
        parent::__construct();
        $this->db = Database::connect();
    }

    public function getAllUser()
    {
        $builder = $this->db->table($this->table);
        $builder->select('users.id as userid, username, email, name as role');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $result = $builder->get()->getResultObject();

        return $result;
    }

    public function getUser($id)
    {
        $builder = $this->db->table($this->table);
        $builder->select('users.id as userid, username, email, name as role, fullname, user_profile as user_pfp, active, force_pass_reset, status, status_message created_at, updated_at');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $result = $builder->getWhere(['users.id' => $id]);

        return $result;
    }

    public function deleteUser($id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id', $id);
        $result = $builder->delete();

        return $result;
    }

    public function editUser($id)
    {
        $request = Services::request();
        // dd($request->getVar('email'), $request->getVar('fullname'), $request->getVar('username'));
        $builder = $this->db->table($this->table);
        $builder->where('id', $id);
        $data = [
            'email' => $request->getVar('email'),
            'fullname' => $request->getVar('fullname'),
            'username' => $request->getVar('username'),
            'password_hash' => password_hash($request->getVar('password'), PASSWORD_DEFAULT),
            /*
            # DONT USE
            # Causing Softlock to User's Account
            'force_pass_reset' => $request->getVar('force_pass_reset'),
            'active' => $request->getVar('active'),
            */
        ];

        $builder->update($data);
    }


}