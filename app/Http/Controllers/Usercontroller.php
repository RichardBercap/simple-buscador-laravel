<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class Usercontroller extends Controller
{
    public function index(Request $request)
    {
      $name = $request->get('name');
      $email = $request->get('email');
      $bio = $request->get('bio');

      $users = User::orderBy('id','DESC')
                  ->email($email)
                  ->name($name)
                  ->bio($bio)
                  ->paginate(4);

      return view('users', compact('users'));
    }
}
