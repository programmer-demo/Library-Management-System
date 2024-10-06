<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!session()->has('login')){
            return redirect()->route('login');
        }
        $users = User::get();
        return view('users.index' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!session()->has('login')){
            return redirect()->route('login');
        }
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(!session()->has('login')){
            return redirect()->route('login');
        }
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'userType' => 'required',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'userType' => $request->userType,
            'password' => $request->password,
        ]);
        return redirect()->route('user.index')->with('success' , 'User Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(!session()->has('login')){
            return redirect()->route('login');
        }
        $user = User::find($id);
        return view('users.edit' , compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(!session()->has('login')){
            return redirect()->route('login');
        }
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'userType' => 'required',
        ]);

        $user = User::find($id);
        $password = $user->password;
        if($request->password){
            $password = $request->password;
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'userType' => $request->userType,
            'password' => $password,
        ]);
        return redirect()->route('user.index')->with('success' , 'User Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        if($user){
            $user->delete();
        }
        return redirect()->route('user.index')->with('success' , 'User Deleted Successfully');
    }
}
