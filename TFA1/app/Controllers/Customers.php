<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Sample Lucero',
                'email' => 'andrea@gmail.com',
                'phone' => '09123456789',
            ],
            [
                'full_name' => 'Mandy Lizardo',
                'email' => 'mandy@gmail.com',
                'phone' => '09987654321',
            ],
            [
                'full_name' => 'Ava Lucero',
                'email' => 'ava@gmail.com',
                'phone' => '09111222333',
            ],
            [
                'full_name' => 'Ivan Lizardo',
                'email' => 'ivan@gmail.com',
                'phone' => '09222333444',
            ],
            [
                'full_name' => 'Vandrea Lucerdo',
                'email' => 'vandrea@gmail.com',
                'phone' => '09333444555',
            ],
        ];

        return view('customers/index', [
            'customers' => $customers,
        ]);
    }
}