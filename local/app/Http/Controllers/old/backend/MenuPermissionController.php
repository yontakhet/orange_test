<?php

namespace App\Http\Controllers\backend;

use App\Model\MenuModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use Storage;
use App\Model\UserModel;
use App\Model\MenuPermissionModel;

class MenuPermissionController extends Controller
{
    public function index()
    {
        return view('backoffice.MenuPermission.index');

    }

    public function create()
    {
        return view('backoffice.MenuPermission.create');

    }

    public function store(Request $request)
    {


    }

    public function show($id)
    {
        $data = UserModel::query()->where('id_admin', $id)->first();
        $getRowData = DB::table('menu_admin')
            ->where('admin_id', $id)->get();
        return view('backoffice.MenuPermission.show', compact('data', 'getRowData'));


    }

    public function edit($id)
    {
        $data = MenuModel::query()->orderBy('sort_menu', 'ASC')->get();
        return view('backoffice.MenuPermission.edit', compact('data', 'id'));
    }


    public function update(Request $request, $id)
    {
        $id_user = $request->id_user;
        $nameMenu = $request->nameMenu;
        $subMenu = $request->subMenu;
        MenuPermissionModel::where('admin_id', $id)->delete();;
        foreach ($nameMenu AS $row) {
            if (count($subMenu[$row]) > 0) {
                $sub = '';
                $i = 1;
                foreach ($subMenu[$row] AS $rowSubMenu) {
                    if ($i != count($subMenu[$row])) {
                        $comma = ',';
                        } else {
                        $comma = '';
                    }
                    $sub .= $rowSubMenu.$comma;
                    $i++;
                }
                DB::table('menu_admin')->insert(
                    [
                        'admin_id' => $id_user,
                        'main_menu_id' => $row,
                        'submenu_id' => $sub
                    ]
                );

            } else {
                DB::table('menu_admin')->insert(
                    [
                        'admin_id' => $id_user,
                        'main_menu_id' => $row
                    ]
                );
            }
        }
        return redirect(url('/backoffice/menu_permission'))->with('success', 'จัดการเลือกเมนูสำเร็จ');
    }

    public function destroy($id)
    {

    }

    public function queryDatatable()
    {
        $data = UserModel::query()->where('stat_admin', '!=', 'poweradmin')->get();
        return Datatables::of($data)->addIndexColumn()
            ->addcolumn('No', '')
            ->addColumn('Manage', function ($data) {
                $Manage = buttonManageData($data->id_admin, true, true, false, 'backoffice/menu_permission');
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
