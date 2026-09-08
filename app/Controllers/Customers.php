<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => 'Ana Reyes', 'email' => 'ana@gmail.com'],
            ['id' => 2, 'name' => 'Ben Santos', 'email' => 'ben@gmail.com'],
            ['id' => 3, 'name' => 'Carla Cruz', 'email' => 'carla@gmail.com'],
            ['id' => 4, 'name' => 'Daniel Lim', 'email' => 'daniel@gmail.com'],
            ['id' => 5, 'name' => 'Ella Garcia', 'email' => 'ella@gmail.com'],
        ];

        return view('customers', ['customers' => $customers]);
    }
}