<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginpage()
    {
        if(Auth::check()){
            return redirect()->back();
        }
        return view('auth.login');
    }

    public function loginform(Request $request){
        $validate = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required',
        ]);

        if($validate->fails()){
            return redirect()->back()->withErrors($validate);
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            return redirect('/');
        }
        return redirect()->back();
    }

    public function registerpage()
    {
        return view('auth.register');
    }

    public function registerform(Request  $request){
        $validate = Validator::make($request->all(),[
            'name'=> 'required|min:3',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6',
            'confirm-password' => 'required|same:password'
        ]);

        if($validate->fails()){
            return redirect()->back()->withErrors($validate);
        }

        $user = new User();
        $user->name =$request->name;
        $user->email = $request->email;
        $user->password =bcrypt($request->password);
        $user->role = 'user';
        $user->save();
        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
