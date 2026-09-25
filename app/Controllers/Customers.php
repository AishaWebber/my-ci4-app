<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria.santos@example.com',
                'phone' => '09171234567',
            ],
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan.delacruz@example.com',
                'phone' => '09181234567',
            ],
            [
                'full_name' => 'Angela Reyes',
                'email' => 'angela.reyes@example.com',
                'phone' => '09191234567',
            ],
            [
                'full_name' => 'Carlo Mendoza',
                'email' => 'carlo.mendoza@example.com',
                'phone' => '09201234567',
            ],
            [
                'full_name' => 'Liza Garcia',
                'email' => 'liza.garcia@example.com',
                'phone' => '09211234567',
            ],
        ];

        return view('customers/index', $data);
    }
}