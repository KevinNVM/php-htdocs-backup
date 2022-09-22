<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PersonsSeeder extends Seeder
{
    
    public function run()
    {
        /* $data = [
            ['username'      => 'darthvader',
            'email'         => 'darth@theempire.com',
            'password'      => password_hash(uniqid(), PASSWORD_DEFAULT),
            'created_at'    => Time::now(),
            'updated_at'    => Time::now()],

            ['username'      => 'nibba',
            'email'         => 'nibba@theempire.com',
            'password'      => password_hash(uniqid(), PASSWORD_DEFAULT),
            'created_at'    => Time::now(),
            'updated_at'    => Time::now()],
            
            ['username'      => 'asep',
            'email'         => 'asep@theempire.com',
            'password'      => password_hash(uniqid(), PASSWORD_DEFAULT),
            'created_at'    => Time::now(),
            'updated_at'    => Time::now()],
            
        ]; */
        
        $faker = \Faker\Factory::create('id_ID');
        for ($i=0; $i < mt_rand(200, 1000); $i++) { 

            $data = [
                'name'          => $faker->name,
                'address'       => $faker->address(),
                'city'          => $faker->city(),
                'email'         => $faker->email,
                'created_at'    => Time::createFromTimestamp($faker->unixTime()),
                'updated_at'    => Time::now()
            ];
            $this->db->table('persons')->insert($data);
        }

        // Simple Queries
        // $this->db->query("INSERT INTO user (username, email, created_at, updated_at) VALUES(:username:, :email:, :created_at:, :updated_at:)", $data);

        // Using Query Builder
        // $this->db->table('user')->insertBatch($data);
    }
}