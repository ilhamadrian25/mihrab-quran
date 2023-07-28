<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'profile_image'     =>      'default.png',
            'username'          =>      'ilham',
            'name'              =>      'Muhamad Ilham',
            'email'             =>      'ilham@gmail.com',
            'password'          =>      password_hash('ilham123', PASSWORD_BCRYPT),
            'role'              =>      'admin',
            'created_at'        =>      date_timestamp_get()
        ];

        $this->db->table('users')->insert($data);
    }
}
