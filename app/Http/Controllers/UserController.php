<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $user = new User();
        $user = User::create(request(['name', 'email', 'password']));

        return redirect('/');
    }

    public function verify(Request $request)
    {
        $user = User::where('email', $request->input('email'))->first();

        if($user)
        {
            if($user->password  == $request->input('password'))
            {
                
                return view('hilos');
            }
            else
            {
                return redirect('/');
            }
        }
        else
        {
            return redirect('/');
        }
    }
}
