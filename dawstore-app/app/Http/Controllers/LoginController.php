<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function register(Request $request)
    {

        $request->validate([
            'full_name' => ['required', 'unique:Users', 'max:30', 'min:5'],
            'email' => ['required', 'unique:Users', 'max:30', 'min:5'],
            'password' => ['required', 'min:6', 'max:255']
        ]);

        //Mensajes de Error

        if ($request->has('errors')) {

            $errors = $request->errors();
            return redirect()->back()->withErrors('errors', $errors);
        } else {
            $user = new User();
            $user->full_name = $request->full_name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);

            $user->save();
            Auth::login($user);
            return redirect(route('profile'));
        }
    }

    public function login(Request $request)
    {

        $credential = $request->validate([
            'email' => ['required', 'unique:Users', 'max:30', 'min:5'],
            'password' => ['required', 'min:6', 'max:255']
        ]);

        //Mensajes de Error

        if ($request->has('errors')) {

            $errors = $request->errors();
            return redirect()->back()->withErrors('errors', $errors);
        } else {


            $remember = ($request->has('remember') ? true : false);

            if (Auth::attempt($credential, $remember)) {

                $request->session()->regenerateToken(); //Regenerar sesion
                return redirect(route('profile'));
            } else {
                return redirect('login');
            }
        }
    }

    public function logout(Request $request)
    {

        Auth::logout();
        $request->session()->invalidate(); //Resetear sesion
        $request->session()->regenerateToken(); //Regenerar sesion
        return redirect(route('login'));
    }

}
