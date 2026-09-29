<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'Boji',
                'email' => 'maria@email.com',
                'role' => 'Cashier',
            ],
            [
                'username' => 'yoshioka',
                'email' => 'christina@email.com',
                'role' => 'Manager',
            ],
            [
                'username' => 'Lucifer',
                'email' => 'mark@email.com',
                'role' => 'Mega Boss',
            ],
            [
                'username' => 'Primo',
                'email' => 'millete@email.com',
                'role' => 'Sales Staff',
            ],
            [
                'username' => 'RuiCodm',
                'email' => 'rui@email.com',
                'role' => 'Mrs. Mega Boss',
            ],
        ];

        return view('users/index', [
            'users' => $users,
        ]);
    }
}