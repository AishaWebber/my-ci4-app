<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DemoSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $today = date('Y-m-d');

        $this->db->table('tasks')->insertBatch([
            [
                'title'      => 'Review CodeIgniter lessons',
                'status'     => 'pending',
                'task_date'  => $today,
                'created_at' => $now,
            ],
            [
                'title'      => 'Complete laboratory activity',
                'status'     => 'in progress',
                'task_date'  => $today,
                'created_at' => $now,
            ],
            [
                'title'      => 'Submit school requirements',
                'status'     => 'pending',
                'task_date'  => $today,
                'created_at' => $now,
            ],
            [
                'title'      => 'Read MVC documentation',
                'status'     => 'completed',
                'task_date'  => date('Y-m-d', strtotime('-1 day')),
                'created_at' => $now,
            ],
            [
                'title'      => 'Practice database queries',
                'status'     => 'completed',
                'task_date'  => date('Y-m-d', strtotime('-1 day')),
                'created_at' => $now,
            ],
            [
                'title'      => 'Prepare presentation slides',
                'status'     => 'pending',
                'task_date'  => date('Y-m-d', strtotime('+1 day')),
                'created_at' => $now,
            ],
            [
                'title'      => 'Review project files',
                'status'     => 'pending',
                'task_date'  => date('Y-m-d', strtotime('+2 days')),
                'created_at' => $now,
            ],
            [
                'title'      => 'Test the hosted application',
                'status'     => 'pending',
                'task_date'  => date('Y-m-d', strtotime('+2 days')),
                'created_at' => $now,
            ],
        ]);

        $this->db->table('users')->insert([
            'username'   => 'demo_user',
            'full_name'  => 'Cristine Joy Mendoza',
            'email'      => 'demo@example.com',
            'created_at' => $now,
        ]);
    }
}