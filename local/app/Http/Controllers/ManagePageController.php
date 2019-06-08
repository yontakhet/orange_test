<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use App\Model\BrandModel;
use App\Model\RoleModel;
use App\Model\RoleManageModel;
use Storage;

class ManagePageController extends Controller
{
    public function allproduct()
    {
        // dd('888888888');
        return view('page.allproduct');

    }
    public function product()
    {
        // dd('888888888');
        return view('page.product');

    }
    public function maxproduct()
    {
        // dd('888888888');
        return view('page.maxproduct');

    }
    public function lifereport()
    {
        // dd('888888888');
        return view('page.lifereport');

    }
    public function withdraw()
    {
        // dd('888888888');
        return view('page.withdraw');

    }
    public function sell()
    {
        // dd('888888888');
        return view('page.sell');

    }
    public function historysell()
    {
        // dd('888888888');
        return view('page.historysell');

    }
    public function repair()
    {
        // dd('888888888');
        return view('page.repair');

    }
    public function repairreport()
    {
        // dd('888888888');
        return view('page.repairreport');

    }
    public function transfer()
    {
        // dd('888888888');
        return view('page.transfer');

    }
    public function managepermission()
    {
        // dd('888888888');
        $roles = RoleModel::all();
        // $rolenow = RoleManageModel::where('model_id', $data->id_user)->first();
        // $rolename = RoleModel::where('id', $rolenow->role_id)->first();

        $data = array(
            // 'roles' => $rolename,
           'roles' => $roles,
        );

        return view('page.managepermission',$data );

    }
}
