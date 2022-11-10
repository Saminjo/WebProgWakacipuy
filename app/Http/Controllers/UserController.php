<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function editProfile()
    {
        $user = User::find(Auth::user()->id);
        return view('edit_profile')->with('user',$user);
    }

    public function changePassword()
    {
        $user = User::find(Auth::user()->id);
        return view('change_password')->with('user',$user);
    }

    public function edit(Request $req)
    {
        $user = User::find($req->id);

        $user->name = $req->username;
        $user->email = $req->email;
        $user->save();

        return redirect('/');
    }

    public function change(Request $req)
    {

        if($req->npass != $req->cpass){
            Session::put('error','password not same');
            return redirect()->back();
        }
        $user = User::find($req->id);
        $user->password = bcrypt($req->cpass);
        $user->save();

        return redirect('/');
    }


}
