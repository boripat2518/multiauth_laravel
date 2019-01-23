<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MerchantLoginController extends Controller
{


    public function __construct() {
      $this->middleware('guest:merchant')->except('logout');
    }
    //
    public function showLoginForm() {
      return view('auth.merchant-login');
    }

    public function login(Request $req) {
        $this->validate($req, [
          'email' => 'required|email',
          'password'=>'required|min:6'
        ]);
        if (Auth::guard('merchant')->attempt(
          ['email'=>$req->email,
          'password'=>$req->password],
          $req->remember)) {
          return redirect()->intended(route('merchant.dashboard'));
        }
        return redirect()->back()->withInput($req->only('email','remember'));
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function merchantLogout(Request $request)
    {
        Auth::guard('merchant')->logout();

        return redirect('/');
    }
}
