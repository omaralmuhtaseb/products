<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{


    public function UserProducts($id){
       $user = User::with('Products')
           ->findOrFail($id);


       return view('users.user-products',compact('user'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('users.index')
            ->withUsers(User::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        User::create([
            'full_name' => $request['full_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        flash('User created successfully!')->success();

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user = User::findOrFail($id);

        return view('users.edit')
            ->withUser($user);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            User::findOrFail($id)
                ->delete();

            flash('User Deleted successfully!')->success();

            return redirect()->back();
        }catch (\Exception $e){

            flash('Cannot delete a user have a products!')->error();

            return redirect()->back();
        }

    }
}
