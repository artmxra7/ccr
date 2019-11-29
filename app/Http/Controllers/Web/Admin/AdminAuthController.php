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

    public function guard()
    {
        return Auth::guard('admin');
    }


}
