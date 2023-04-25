<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function passwordChange()
    {
        return view("user.password");
    }
    public function changePassword(Request $request)
    {
        $user = User::find(auth()->user()->id);
        if (!Hash::check($request->old, $user->password)) {
            return redirect()->back()->with("msg", "Old password doesnot match");
        }
        $user->password = Hash::make($request->new);
        $user->update();
        return redirect()->back()->with("msg", "Password is changed");
    }
    public function index()
    {

        $users = User::latest()->get();
        return view("user.index", compact("users"));
    }
    public function create()
    {
        return view("user.create");
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view("user.edit", compact("user"));
    }
    public function store(Request $request)
    {

        $data = $request->validate([
            "name" => "sometimes",
            "email" => "sometimes",
            "password" => "sometimes",
            "role" => "sometimes",
        ]);
        $data["password"] = Hash::make($data["password"]);
        User::create($data);
        return redirect()->route("allUser")->with("msg", "User created");
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route("allUser")->with("msg", "User deleted");
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            "name" => "sometimes",
            "email" => "sometimes",
            "password" => "sometimes",
            "role" => "sometimes",
        ]);
        $user = User::find($id);
        $user->name = $data["name"];
        $user->email = $data["email"];
        $user->role = $data["role"];
        if ($request->password !== " ") {
            $user->password = Hash::make($data["password"]);
        }
        $user->save();
        return redirect()->route("allUser")->with("msg", "User updated");
    }
}
