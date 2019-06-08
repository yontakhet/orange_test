<?php

namespace App\Http\Controllers\backend;

use App\Model\UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Http\Requests\RequestAdmin;
use App\Http\Requests\RequestAdminUpdate;
use Validator;
use DB;
use Storage;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('backoffice.admin.index');

    }

    public function create()
    {
        return view('backoffice.admin.create');

    }

    public function store(RequestAdmin $request)
    {
        if ($request->file != '') {
            $fileName = insertSingleImage($request->file, 'admin');
        } else {
            $fileName = '';
        }

        $name = $request->name_admin;
        $email = $request->email;
        $password = Hash::make($request->password);
        $user = new UserModel;
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->img_profile = $fileName;
        $user->stat_admin = 'admin';
        $user->save();
        return redirect(url('/backoffice/admin'))->with('success', 'อัพเดท admin สำเร็จ');

    }

    public function show($id)
    {
        $data = UserModel::query()->leftJoin('profile_admin AS profile', 'system_admin.id_admin', 'profile.relation_admin')->where('id_admin', $id)->first();
        return view('backoffice.admin.show', compact('data'));

    }

    public function edit($id)
    {

        $data = UserModel::query()->where('id_admin', $id)->first();
        return view('backoffice.admin.edit', compact('data', 'id'));

    }

    public function update(RequestAdminUpdate $request, $id)
    {
//        dd($request);
        $data = UserModel::where('id_admin', $id)->first();
        if ($request->file != '') {
            Storage::delete('admin/' . $data->img_profile);
            $fileName = insertSingleImage($request->file, 'admin');
        } else {
            $fileName = @$data->img_profile;
        }
        $name = $request->name_admin;
        if ($request->password != '') {
            $password = Hash::make($request->password);

            UserModel::where('id_admin', $id)->update(
                [
                    'name' => $name,
                    'password' => $password,
                    'img_profile' => $fileName
                ]
            );
        } else {
            UserModel::where('id_admin', $id)->update(
                [
                    'name' => $name,
                    'img_profile' => $fileName,
                ]
            );
        }

        return redirect(url('/backoffice/admin'))->with('success', 'อัพเดท admin สำเร็จ');
    }

    public function destroy($id)
    {
        $data = UserModel::where('id_admin', $id)->first();
        if ($data->img_profile != '') {
            Storage::delete('admin/' . $data->img_profile);
        }
        UserModel::destroy($id);
        return messageSuccess('Delete sub menu success');
    }

    public function queryDatatable()
    {
        $data = UserModel::query()->where('stat_admin', '!=', 'poweradmin')->get();
        return Datatables::of($data)->addIndexColumn()
            ->addcolumn('No', '')
            ->addColumn('Manage', function ($data) {
                $Manage = buttonManageData($data->id_admin, true, true, true, 'backoffice/admin');
                return $Manage;
            })
            ->addColumn('Img', function ($data) {
                $img = '<img src="' . url('storage/admin/' . $data->img_profile) . '" style="width:100px;height:100px">';
                return $img;
            })
            ->rawColumns(['No', 'Img', 'Manage'])
            ->make(true);
    }

}
