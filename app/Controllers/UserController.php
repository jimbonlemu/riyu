<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\User;
use Riyu\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = new User();
        print_r($user->all());
        $page = $request->page;
        $page = $page ? $page : 1;
        $limit = 5;
        $offset = ($page - 1) * $limit;
        $users = User::all();
        $total = User::count();
        $pages = ceil($total / $limit);
        return view('user/index', compact('users', 'pages', 'page'));
    }

    public function create()
    {
        return view('user/register');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->password = password_hash($request->password, PASSWORD_BCRYPT);
        $user->save();
        return view('login');
    }

    public function show($id)
    {
        $user = User::findorfail($id);
        return view('user/show', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findorfail($id);
        $user->username = $request->username;
        $user->password = password_hash($request->password, PASSWORD_BCRYPT);
        $user->save();
    }

    public function destroy(Request $request, $id)
    {
        $user = User::findorfail($id);
        $user->delete();
    }
}
