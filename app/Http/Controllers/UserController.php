<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where(['email' => $request->post('email')])->first();
        if (!$user || !Hash::check($request->post('password'), $user->password)) {
            $data = Contact::all();
            return view('home', ['contacts' => $data, 'error' => 'Username or password is not matched']);
        } else {
            $request->session()->put('user', $user);
            return redirect('/');
        }
    }
}
