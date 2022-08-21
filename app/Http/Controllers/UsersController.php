<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

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
        $validate = Validator::make(
            $request->all(),
            [
                'first_name' => 'required',
                'surname' => 'required',
                'email_address' => 'required',
                'role' => 'required',
            ],
            [
                'name.required' => 'Name is must.',
                'name.min' => 'Name must have 5 char.',
            ],
        );

        if ($validate->fails()) {
            $errors = $validate->errors();
            foreach($errors->getMessages() as $messages) {
                // Go through each message for this field.
                foreach($messages AS $message) {
                    Alert::error('Oops', $messages)->persistent(true, false);
                }
                
            }
            //dd($validate->errors());
        } else {
            $user = new User();
            $user->first_name = $request->first_name;
            $user->surname = $request->surname;
            $user->email_address = $request->email_address;
            $user->role = $request->role;

            try {
                $user->save();
                Alert::success('Success', 'New user created successfully');
            } catch (\Illuminate\Database\QueryException $e) {
                $errorCode = $e->errorInfo[1];

                if ($errorCode == '1062') {
                    Alert::error('Oops', 'Duplicate Entry for')->persistent(true, false);
                } else {
                    Alert::error('Oops', $e->errorInfo[2])->persistent(true, false);
                }
            }
        }

        return back();
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
