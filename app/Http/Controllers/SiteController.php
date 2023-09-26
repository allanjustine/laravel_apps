<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(2);

        return view('pages.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          =>          ['required', 'max:255'],
            'address'       =>          ['required', 'max:255'],
            'age'           =>          ['required', 'numeric', 'max:255'],
            'birthday'      =>          ['required', 'max:255'],
            'email'         =>          ['required', 'email', 'max:255', 'unique:users'],
            'password'      =>          ['required', 'confirmed ', 'max:255', 'min:4']
        ]);

        $request = User::create([
            'name'                  =>          $request->name,
            'address'               =>          $request->address,
            'age'                   =>          $request->age,
            'birthday'              =>          $request->birthday,
            'email'                 =>          $request->email,
            'password'              =>          bcrypt($request->password)
        ]);

        return redirect('/')->with('message', 'User ' . $request->name . ' is added to the list successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $user = User::where('name', $name)->first();

        return view('pages.view', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('pages.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'          =>          ['required', 'max:255'],
            'address'       =>          ['required', 'max:255'],
            'age'           =>          ['required', 'numeric', 'max:255'],
            'birthday'      =>          ['required', 'max:255'],
            'email'         =>          ['required', 'email', 'max:255', 'unique:users,email->ignore($request->user->id)']
        ]);

        $user->update([
            'name'          =>          $request->name,
            'address'       =>          $request->address,
            'age'           =>          $request->age,
            'birthday'      =>          $request->birthday,
            'email'         =>          $request->email
        ]);

        return redirect('/')->with('message', 'User ' . $request->name . ' is updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function delete(User $user)
    {
        return view('pages.delete', compact('user'));
    }


    public function destroy(User $user)
    {

        $user->delete();

        return redirect('/')->with('message', 'User ' . $user->name . ' is deleted successfully');
    }
}
