<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function index()
  {
    return view('pages.login');
  }

  public function loginHandler(Request $request)
  {

    $request->validate(
      [
        'name' => 'required|alpha|min:6',
        'email' => ['required', 'email'],
        'password' => ['required', 'email', 'min:8', 'max:12'],
      ],
      [
        'name.required' => 'User name field is mandatory.',
        'name.alpha' => 'User name must contain letters.',
      ]
    );

    return $request;
  }
}
