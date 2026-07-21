<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function authenticate(Request $request)
    {

        // LOGIN OWNER
        if (
            $request->email == 'owner@gmail.com'
            &&
            $request->password == '12345678'
        ) {

            return redirect('/owner');
        }

        // LOGIN STAFF
        if (
            $request->email == 'staff@gmail.com'
            &&
            $request->password == '12345678'
        ) {

            return redirect('/staff');
        }

        // JIKA SALAH
        return redirect('/login');

    }

    public function logout()
    {
        return redirect('/login');
    }

}