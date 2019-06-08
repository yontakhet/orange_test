<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use Storage;
use App\Model\ColorModel;

class ColorController extends Controller
{
    public function index()
    {
        return view('backoffice.Color.index');

    }

    public function create()
    {
        return view('backoffice.Color.create');

    }

    public function store(Request $request)
    {
        $data = new ColorModel;
        $data->name_colorTH = $request->name_colorTH;
        $data->name_colorEN = $request->name_colorEN;
        $data->save();
        return redirect(url('/backoffice/color'))->with('success', 'เพิ่มข้อมูลข้อมูลสำเร็จ');


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

}
