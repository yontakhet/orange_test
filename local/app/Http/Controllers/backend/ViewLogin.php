<?php
namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use Storage;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class ViewLogin extends Controller
{
//    use AuthenticatesUsers;
//    protected $redirectTo = '/';

    public function index()
    {
        $id = Auth::id();
        if($id){
            return redirect(url('backoffice/profile'));

        }else {
            return view('backoffice.login', compact('id'));
        }
    }


//    public function username()
//    {
//        return 'username';
//    }
//
//    public function __construct()
//    {
//        $this->middleware('guest')->except('logout');
//    }

}
