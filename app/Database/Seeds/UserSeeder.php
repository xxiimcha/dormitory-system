<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username'   => 'admin',
                'email'      => 'admin@example.com',
                'password'   => password_hash('admin123', PASSWORD_DEFAULT), // Admin Password
                'role'       => 'admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'username'   => 'dorm_owner',
                'email'      => 'owner@example.com',
                'password'   => password_hash('owner123', PASSWORD_DEFAULT), // Dorm Owner Password
                'role'       => 'dorm_owner',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert data into the users table
        $this->db->table('users')->insertBatch($data);
    }
}
