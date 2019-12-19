<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Auth\LoginController as DefaultLoginController;

class AdminAuthController extends DefaultLoginController
{
    //

    use AuthenticatesUsers;
    protected $guard = 'admin';
    protected $redirectTo = '/admin/dashboard';

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginAdmin(){
        return view('admin.login');
    }

    public function login(Request $request){
        $rules = array(
            'email'    => 'required|email',
            'password' => 'required'
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator) // send back all errors to the login form
                ->withInput($request->except('password')); // send back the input (not the password) so that we can repopulate the form
        }
        else {
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {


              return redirect()->route('admin.dashboard');
          }
          else
          {
            // validation not successful, send back to form
            return redirect()->back()
            ->withErrors("Email dan Password salah. Silahkan coba lagi.")
            ->withInput();
          }
       }
    }

    public function guard()
    {
        return Auth::guard('admin');
    }


}
