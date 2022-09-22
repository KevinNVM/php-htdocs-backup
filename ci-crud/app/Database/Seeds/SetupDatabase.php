<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SetupDatabase extends Seeder
{
    public function run()
    {
        $this->call('CreateAuthGroups');
    }
}