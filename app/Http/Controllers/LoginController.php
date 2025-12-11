<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest:admin', ['except' => ['logout']]);
  }

  public function newlogin()
  {
     return view('newlogin');
  }


  public function login(Request $request)
  {
     $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required',
    ]);

    if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
      return redirect()->intended(route('admin'));
    }

    Session::flash('message', "f");
    return redirect()->back()->withInput($request->only('email', 'remember'));
  }

  public function logout()
  {
    Auth::guard('admin')->logout();
    return redirect()->route('admin-login');
  }
}
