<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\AllProductModel;
use App\Model\ColorModel;
use App\Model\UserModel;
use App\Model\RoleManageModel;
use App\Model\RoleModel;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use Storage;


class ManagePermissionController extends Controller
{
    public function anyData()
    {
        // $data = MemberModel::where('verify','1')->orderBy('id_mem', 'desc');
        $data = UserModel::where('id_user','!=', 1);
        // dd($data);
        // return Datatables::of($data)->make(true);
        return Datatables::of($data)->addIndexColumn()
        // ->addColumn('Detail', function ($data) {

        //     return' <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
        //     Launch Success Modal
        //   </button>';
        //  })
        ->addColumn('Detail', function ($data) {


            $data = RoleManageModel::where('model_id', $data->id_user)->first();

            if ($data->role_id == "1") {
                # code...
                $text = "ผูัจัดการโปรแกรม";
            } else if ($data->role_id == "3") {
                # code...
                $text = "หัวหน้า";
            } else {

                $text = "ผูัใข้งานทั่วไป";
            }


            return  $text ;
         })
        ->addColumn('Manage', function ($data) {

            return' <div>
            <button class="btn btn-xs manage" data-id="'.$data->id_user.'" role="button"

            style="background-color:  #2d96ff;color: white;    margin: 0;">
            <i class="fa fa-fw fa-pencil"></i> จัดการ permission
            </button>
            <button class="btn btn-xs" href="product.php" role="button"
            style="background-color:  #ffb52d;color: white;    margin: 0;">
            <i class="fa fa-fw fa-pencil"></i> แก้ไข
            </button>
            <button class="btn btn-xs" href="#" role="button" style="background-color:  #ff6c6c;color: white;    margin: 0;">
            <i class="fa fa-fw fa-trash"></i> ลบ
            </button>

              </div>';
         })
        ->rawColumns(['Export','Detail','Manage'])
        ->make(true);
    }
    public function index()
    {
        // return view('backoffice.Color.index');

        return view('page.allproduct');
    }

    public function create()
    {
        return view('backoffice.Color.create');

    }

    public function store(Request $request)
    {
        // dd($request);
        $data = new AllProductModel;
        $data->name = $request->name;
        $data->unit = $request->unit;
        $data->priceperunit = $request->priceperunit;
        $data->totalvalue = $request->totalvalue;
        $data->date_come = $request->date_come;
        $data->category = $request->category;
        $data->service_for = $request->service_for;
        $data->code_asa = $request->code_asa;
        $data->gfmis = $request->gfmis;
        $data->code = $request->code;
        // $data->code = $request->code;
        // $data->name_colorEN = $request->name_colorEN;
        $data->save();

        return redirect('allproduct');
        // return redirect(url('/backoffice/color'))->with('success', 'เพิ่มข้อมูลข้อมูลสำเร็จ');


    }

    public function show($id)
    {
        return view('backoffice.Color.show');

    }

    public function edit($id)
    {
        $data = ColorModel::query()->where('id_color', $id)->first();
        return view('backoffice.Color.edit', compact('data', 'id'));
    }

    public function update(Request $request, $id)
    {
        ColorModel::where('id_color', $id)->update([
            'name_colorTH' => $request->name_colorTH,
            'name_colorEN' => $request->name_colorEN
        ]);
        return redirect(url('/backoffice/color'))->with('success', 'อัพเดทข้อมูลข้อมูลสำเร็จ');


    }

    public function destroy($id)
    {
        ColorModel::destroy($id);
    }

    public function queryDatatable()
    {
        $data = ColorModel::query()->where('id_color', '!=', '1')->get();
        return Datatables::of($data)->addIndexColumn()
            ->addcolumn('No', '')
            ->addColumn('Manage', function ($data) {
                $Manage = buttonManageData($data->id_color, false, true, true, 'backoffice/color');
                return $Manage;
            })
            ->rawColumns(['No', 'Manage'])
            ->make(true);
    }
    public function managepermissionSelect(Request $request)
    {

        $id = $request->id;

        $rolenow = RoleManageModel::where('model_id', $id)->first();
        $rolename = RoleModel::where('id', $rolenow->role_id)->first();

        return   $rolename ;
    }
    public function managepermissionUpdate(Request $request)
    {

        $id = $request->get('id_user');
        $role = $request->get('role');

        $rolenow = RoleManageModel::find($id);
        $rolenow->role_id = $role;
        // dd($rolenow);
        // $rolenow->model_type = $role;

        $rolenow->save();
        // $rolename = RoleModel::where('id', $rolenow->role_id)->first();

        return   $rolenow ;
    }

}
