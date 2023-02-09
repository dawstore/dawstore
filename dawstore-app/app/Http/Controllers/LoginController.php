<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function register(Request $request){
        //Validación de datos aqui

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        Auth::login($user);
        return redirect(route('profile'));
    }

    public function login(Request $request){
        //Validación de datos aqui

        $credential = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        $remember = ($request->has('remember') ? true : false);
        if (Auth::attempt($credential, $remember)){

            $request->session()->regenerateToken();//Regenerar sesion
            return redirect(route('profile'));


        } else {
            return redirect('login');
        }

    }



    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();//Resetear sesion
        $request->session()->regenerateToken();//Regenerar sesion
        return redirect(route('login'));

    }
}
