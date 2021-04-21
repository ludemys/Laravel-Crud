<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($page = 1)
    {
        $users = ['admin', 'luciano', 'ricardo', 'carlota'];

        $title = 'Users list';

        return view('user.index', [
            'title' => $title,
            'users' => $users,
            'page' => $page
        ]);
    }

    public function details()
    {
        echo 'hihihi';
        die();
    }
}
