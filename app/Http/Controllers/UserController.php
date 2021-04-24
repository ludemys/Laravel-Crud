<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index($page = 1)
    {

        $users = DB::select("SELECT id, name, email FROM users");

        return view('user.index', [
            'title' => 'Users list',
            'users' => $users,
            'page' => $page
        ]);
        // return var_dump($users);
    }

    public function details($id)
    {
        $user = DB::selectOne("SELECT * FROM users WHERE id = $id");

        return view('user.details', [
            'user' => $user
        ]);
        // return json_encode($user);
    }

    public function redirect($id)
    {
        return redirect()->route('users.details', ['id' => $id]);
    }
}
