<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function index($page = 1)
    {

        $users = DB::table('Users')
            ->select('id', 'name', 'email')
            ->orderBy('id', 'desc')
            ->get();

        return view('user.index', [
            'title' => 'Users list',
            'users' => $users,
            'page' => $page
        ]);
        // return var_dump($users);
    }

    public function details($id)
    {
        $user = DB::table('Users')->where('id', '=', $id)->first();

        return view('user.details', [
            'user' => $user
        ]);
        // return json_encode($user);
    }

    public function redirect($year = null)
    {
        return "<h1>YOU PASSED! It's $year</h1>";
    }

    public function create()
    {
        return view('user.create');
    }

    public function register(Request $request)
    {
        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        $user->save();

        return redirect()->route('users.index');
    }

    public function update_password($id, Request $request)
    {
        $user = User::find($id);

        $user->password = $request->input('password');
        $user->save();

        return redirect()->route('users.index');
    }

    public function delete($id)
    {
        DB::delete("DELETE FROM Users WHERE id = $id");

        return redirect()->route('users.index');
    }
}
