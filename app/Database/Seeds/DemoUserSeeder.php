<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DemoUserSeeder extends Seeder
{
    public function run()
    {
        $builder = $this->db->table('users');

        $existingUser = $builder
            ->where('username', 'staff1')
            ->get()
            ->getRow();

        $userData = [
            'username'   => 'staff1',
            'full_name'  => 'Staff Member One',
            'email'      => 'staff1@example.com',
            'password'   => password_hash('staff123', PASSWORD_DEFAULT),
            'created_at' => date('Y-m-d H:i:s'),
        ];

        if ($existingUser) {
            $builder
                ->where('username', 'staff1')
                ->update([
                    'full_name' => $userData['full_name'],
                    'email'     => $userData['email'],
                    'password'  => $userData['password'],
                ]);
        } else {
            $builder->insert($userData);
        }
    }
}