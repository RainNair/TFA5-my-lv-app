<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = [
            ['username' => 'admin', 'full_name' => 'Rainier Espino', 'role' => 'Administrator'],
            ['username' => 'cashier01', 'full_name' => 'Mia Rodriguez', 'role' => 'Cashier'],
            ['username' => 'cashier02', 'full_name' => 'Noah Dela Cruz', 'role' => 'Cashier'],
            ['username' => 'manager01', 'full_name' => 'Sofia Villanueva', 'role' => 'Manager'],
            ['username' => 'inventory01', 'full_name' => 'Lucas Navarro', 'role' => 'Inventory Staff'],
        ];

        return view('pages.users', compact('users'));
    }
}
