<?php

namespace App\Http\Controllers;

use App\Models\Security;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SecurityController extends Controller
{
    public function main()
    {
        return view('User.auth.login');
    }
    public function check()
    {
        return view('User.auth.success');
    }
    public function success(Request $request)
    {
        $validation = $request->validate([
            'username' => 'required|max:15|min:3',
            'email' => 'required|unique:securities,email',
            'password' => 'required'
        ]);
        $security = Security::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // dd($security);
        //    return redirect()->route('done');
        if ($security) {
            return redirect()->route('done');
        }else{
            return redirect()->route('main')->withErrors($validation);
        }
    }
}
