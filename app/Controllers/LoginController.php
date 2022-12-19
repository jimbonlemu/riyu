<?php
namespace App\Controllers;

use App\Controllers\Controller;
use Riyu\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function create()
    {
        return view('login/create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request, $id)
    {
        //
    }
}