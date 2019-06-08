<?php

namespace App\Http\Controllers\Auth;
use App\Model\UserModel;
use App\Http\Requests\CheckLogin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator;
use Auth;

use Session;

class LoginAdminController extends Controller
{
    protected function guard()
    {
        return Auth::guard('web');
    }
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    public function ShowLoginAdmin()
    {

        return view('backoffice.login');
    }

    public function login(CheckLogin $request)
    {
        $remember = $request->get('remember');
        if (Auth::guard('web')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $remember)) {
            $findUser = UserModel::where('email', $request->email)->first();
            session(['id_admin' => $findUser->id_admin]);
            session(['name_admin' => $findUser->name]);
            session(['email_admin' => $findUser->email]);
            session(['img_admin' => $findUser->img_profile]);
            session(['stat_admin' => $findUser->stat_admin]);
            return redirect()->guest(url('backoffice/profile'));

        }else {
//            return redirect()->back()->withInput($request->only('email', 'remember'));
            return redirect()->back()->with('status', 'Username or Password is not correct');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/backoffice/login');
    }

}
