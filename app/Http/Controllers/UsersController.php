<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.users.all');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.users.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate the form input fields
        $validate = Validator::make(
            $request->all(),
            [
                'first_name' => 'required',
                'surname' => 'required',
                'email_address' => 'required|email|unique:users',
                'role' => 'required|in:admin,HOD,deputy_HOD',
            ],
        );

        //Alert the user of the input error
        if ($validate->fails()) {
            $errors = $validate->errors();

            foreach ($errors->all() as $error) {
                Alert::error('Oops', $error)->persistent(true, false);
            }
        } else {

            //Save the input data to database
            $user = new User();
            $user->first_name = $request->first_name;
            $user->surname = $request->surname;
            $user->email_address = $request->email_address;
            $user->role = $request->role;

            $user->save();
            Alert::success('Success', 'New user created successfully');

        }

        return back()->withInput($request->except('password'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
        //
    }
}
