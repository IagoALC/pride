<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function myProfile()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('admin.profile.index', ['user' => $user]);
    }

    public function myProfileUpdate(Request $request, User $user)
    {



        // Validar, tratar erros ...

        $user->role = $request->role;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->genre = $request->genre;
        $user->date_of_birth = $request->date_of_birth;
        $user->place_of_birth = $request->place_of_birth;
        $user->document = $request->document;
        $user->document_secondary = $request->document_secondary;
        $user->document_secondary_complement = $request->document_secondary_complement;
        if ($request->has('file')) {
            $user->cover = $request->file('file')->store('user/cover');
        }
        $user->newsletter = $request->newsletter;
        $user->zipcode = $request->zipcode;
        $user->street = $request->street;
        $user->number = $request->number;
        $user->complement = $request->complement;
        $user->neighborhood = $request->neighborhood;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->telephone = $request->telephone;
        $user->cell = $request->cell;
        $user->appointment = $request->appointment;
        $user->store = $request->store;
        $user->blog = $request->blog;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->status = $request->status;

        $user->save();

        return redirect()->back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
