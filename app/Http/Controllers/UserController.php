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
        $users = User::all();

        return view("alraza", compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("adduser"); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Mass assignment method to store user
        User::create([
            'name' => $request->username,
            'email' => $request->useremail,
            'address' => $request->useraddress,
            'age' => $request->userage,
            'city' => $request->usercity,
        ]);

        return redirect()->route('users.index')->with('status', 'Add new Record Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::find($id);

        return view("viewuser", compact('users')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Corrected: Find user by id and pass it to the view
        $users = User::find($id);

        return view("update", compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Corrected: Find user by id
        $users = User::find($id);

        // Update user details
        $users->name = $request->username;
        $users->email = $request->useremail;
        $users->address = $request->useraddress;
        $users->age = $request->userage;
        $users->city = $request->usercity;

        // Save the updated user data
        $users->save();

        // Redirect with success message
        return redirect()->route('users.index')->with('status', 'Update Record Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users=User::find($id);
        $users->delete();

        return redirect()->route('users.index')
        ->with('status','Delete Data for my Database is SuccessfUlly.');
    }
}

