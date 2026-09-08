<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            ['id' => 1, 'username' => 'admin01', 'role' => 'Administrator'],
            ['id' => 2, 'username' => 'staff01', 'role' => 'Staff'],
            ['id' => 3, 'username' => 'editor01', 'role' => 'Editor'],
            ['id' => 4, 'username' => 'support01', 'role' => 'Support'],
            ['id' => 5, 'username' => 'viewer01', 'role' => 'Viewer'],
        ];

        return view('users', ['users' => $users]);
    }
}