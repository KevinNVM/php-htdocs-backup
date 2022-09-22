<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CreateAuthGroups extends Seeder
{
    public function run()
    {        
        $this->db->table('auth_groups')->insertBatch([
            [
                'name' => 'ADMIN',
                'description' => 'Website Administrator. Has Permission To Manage Users',
            ],
            [
                'name' => 'USER',
                'description' => 'Default User',
            ]
        ]);

        $this->db->table('auth_permissions')->insertBatch([
            [
                'name' => 'MANAGE-PROFILE',
                'description' => 'manage user profile'
            ],
            [
                'name' => 'MANAGE-USERS',
                'description' => 'manage user accounts'
            ],
        ]);

        $this->db->table('auth_groups_permissions')->insertBatch([
            [
                'group_id' => '1',
                'permission_id' => '1',
            ],
            [
                'group_id' => '1',
                'permission_id' => '2',
            ],
            [
                'group_id' => '2',
                'permission_id' => '1',
            ],
        ]);
    }
}