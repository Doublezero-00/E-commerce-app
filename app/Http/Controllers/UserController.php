<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('pages.users.index', compact('users'));
    }

    public function create() {
        return view('pages.users.create');
    }

    public function store(Request $request) {
        $data = $request->all();
        $pass = $data['password'];
        $data['password'] = bcrypt($pass);

        User::create($data);
        return redirect()->route('users.index');
    }

    public function edit($id) {
        $response['users'] = User::find($id);
        return view('pages.users.edit')->with($response);
    }

    public function update(Request $request, $id) {
        $data = $request->all();
        User::find($id)->update($data);
        return redirect()->route('users.index');
    }

    public function delete($id) {
        User::find($id)->delete();
        return redirect()->route('users.index');
    }
}
