<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use Storage;
use App\Model\CategoryModel;
use App\Http\Requests\RequestAdmin;

class CategoryController extends Controller
{
    public function index()
    {
              return view('backoffice.Category.index');

    }

    public function create()
    {
        return view('backoffice.Category.create');

    }

    public function store(Request $request)
    {
        $menu = $request->menu;
        $code = $request->code;
        $name_cateTH = $request->name_cateTH;
        $name_cateEN = $request->name_cateEN;
        $data = new CategoryModel;
        $data->code_category = $code;
        $data->type_id = $menu;
        $data->name_categoryTH = $name_cateTH;
        $data->name_categoryEN = $name_cateEN;
        $data->save();
        return redirect(url('/backoffice/category'))->with('success', 'เพิ่มข้อมูลสำเร็จ');


    }

    public function show($id)
    {
        return view('backoffice.Category.show');

    }

    public function edit($id)
    {
        $data = CategoryModel::where('id_category',$id)->first();
        return view('backoffice.Category.edit',compact('data','id'));
    }

    public function update(Request $request, $id)
    {
        $menu = $request->menu;
        $code = $request->code;
        $name_cateTH = $request->name_cateTH;
        $name_cateEN = $request->name_cateEN;
        CategoryModel::where('id_category',$id)->update([
           'code_category' => $code,
           'type_id' => $menu,
           'name_categoryTH' => $name_cateTH,
           'name_categoryEN' => $name_cateEN
        ]);

        return redirect(url('/backoffice/category'))->with('success', 'อัพเดทข้อมูลสำเร็จ');

    }

    public function destroy($id)
    {
        CategoryModel::destroy($id);
    }

    public function queryDatatable()
    {
        $data = CategoryModel::query()->get();
        return Datatables::of($data)->addIndexColumn()
            ->addcolumn('No', '')
            ->addColumn('Manage', function ($data) {
                $Manage = buttonManageData($data->id_category, false, true, true, 'backoffice/category');
                return $Manage;
            })
            ->rawColumns(['No', 'Manage'])
            ->make(true);
    }

}
