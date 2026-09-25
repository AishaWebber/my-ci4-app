<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username' => 'admin',
                'full_name' => 'Cristine Mendoza',
                'role' => 'Administrator',
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Mark Villanueva',
                'role' => 'Cashier',
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Anna Flores',
                'role' => 'Manager',
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Kevin Ramos',
                'role' => 'Inventory Staff',
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Bea Cruz',
                'role' => 'Cashier',
            ],
        ];

        return view('users/index', $data);
    }
}