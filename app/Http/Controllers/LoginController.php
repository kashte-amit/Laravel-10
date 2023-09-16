<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function index()
  {
    return view('pages.login');
  }

  public function loginHandler(LoginRequest $request)
  {
    return $request;
  }
}
