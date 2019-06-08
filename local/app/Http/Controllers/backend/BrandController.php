<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use App\Model\BrandModel;

use Storage;

class BrandController extends Controller
{
    public function index()
    {
        return view('backoffice.Brand.index');

    }

    public function create()
    {
        return view('backoffice.Brand.create');

    }

    public function store(Request $request)
    {
        $name_brandTH = $request->name_brandTH;
        $name_brandEN = $request->name_brandEN;
        $brand = new BrandModel;
        $brand->name_brandTH = $name_brandTH;
        $brand->name_brandEN = $name_brandEN;
        $brand->save();
        return redirect(url('/backoffice/brand'))->with('success', 'อัพเดทข้อมูลสำเร็จ');

    }

    public function show($id)
    {
        return view('backoffice.Brand.show');

    }

    public function edit($id)
    {
        $data = BrandModel::query()->where('id_brand',$id)->first();
        return view('backoffice.Brand.edit',compact('data','id'));
    }

    public function update(Request $request, $id)
    {

        $name_brandTH = $request->name_brandTH;
        $name_brandEN = $request->name_brandEN;
        BrandModel::where('id_brand',$id)->update(['name_brandTH'=>$name_brandTH,'name_brandEN'=>$name_brandEN]);
//        $brand->save();
        return redirect(url('/backoffice/brand'))->with('success', 'อัพเดทข้อมูลสำเร็จ');

    }

    public function destroy($id)
    {
        BrandModel::destroy($id);

    }

    public function queryDatatable()
    {
        $data = BrandModel::query()->get();
        return Datatables::of($data)->addIndexColumn()
            ->addcolumn('No', '')
            ->addColumn('Manage', function ($data) {
                $Manage = buttonManageData($data->id_brand, false, true, true, 'backoffice/brand');
                return $Manage;
            })
            ->rawColumns(['No', 'Manage'])
            ->make(true);
    }

}
