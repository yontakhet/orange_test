<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use Storage;
use App\Model\MainProductModel;
use App\Model\CategoryModel;
use App\Model\BrandModel;
use App\Model\CompanyModel;

class MainProductController extends Controller
{
    public function index()
    {
        return view('backoffice.MainProduct.index');

    }

    public function create()
    {
        $company = CompanyModel::query()->get();
        $cates = CategoryModel::query()->get();
        $brands = BrandModel::query()->get();
        return view('backoffice.MainProduct.create', compact('cates', 'brands', 'type', 'company'));

    }

    public function store(Request $request)
    {
        $path = 'main';
        $pre_order = postNumber($request->pre_order);
        $fileName = insertSingleImage($request->fileZoom, $path);
        $fileZoom = insertSingleImage($request->fileZoom, $path);

        $data = new MainProductModel;
        $data->relation_shops = $request->relation_shops;
        $data->relation_brand = $request->relation_brand;
        $data->relation_type = $request->type_id;
        $data->relation_category = $request->relation_category;
        $data->name_productTH = $request->name_productTH;
        $data->shapeTH = $request->shapeTH;
        $data->other_specialTH = $request->other_specialTH;
        $data->decorative_styleTH = $request->decorative_styleTH;
        $data->material_productTH = $request->material_productTH;
        $data->care_instructionTH = $request->care_instructionTH;
        $data->name_productEN = $request->name_productEN;
        $data->shapeEN = $request->shapeEN;
        $data->name_productEN = $request->name_productEN;
        $data->other_specialEN = $request->other_specialEN;
        $data->decorative_styleEN = $request->decorative_styleEN;
        $data->material_productEN = $request->material_productEN;
        $data->care_instructionEN = $request->care_instructionEN;
        $data->ordering_period = $pre_order;
        $data->detail_productTH = $request->detail_productTH;
        $data->detail_productEN = $request->detail_productEN;
        $data->MFD = postDate($request->MFD);
        $data->EXP = postDate($request->EXP);
        $data->file_main = $fileName;
        $data->file_zoom = $fileZoom;
        if ($data->save()) {
            $id = $data->id_main;

            if (isset(request()->files) && count(request()->files) > 0) {

                $images = insertMultipleImage($request, $path, 'files');
                if (count($images) > 0) {
                    foreach ($images As $img) {
                        $arrData = array(
                            'relation_company' => $request->relation_shops,
                            'relation_main' => $id,
                            'name_img' => $img,
                        );
                        DB::table('files_product')->insert($arrData);

                    }
                }
            }
            return redirect(url('/backoffice/main_product'))->with('success', 'เพิ่มข้อมูลสำเร็จ');

        }


    }

    public function show($id)
    {
        $data = MainProductModel::query()->where('id_main', $id)->first();
        return view('backoffice.MainProduct.show', compact('id', 'data'));

    }

    public function edit($id)
    {
        $data = MainProductModel::query()->leftJoin('hk_type AS t', 'hk_main.relation_type', 't.id_type')->where('id_main', $id)->first();
        $company = CompanyModel::query()->get();
        $cates = CategoryModel::query()->get();
        $brands = BrandModel::query()->get();
        return view('backoffice.MainProduct.edit', compact('id', 'data', 'cates', 'brands', 'type', 'company'));

    }

    public function update(Request $request, $id)
    {
        $path = 'main';
        $data = MainProductModel::query()->where('id_main', $id)->first();
        $pre_order = postNumber($request->pre_order);
        if ($request->file != '') {
            $fileName = insertSingleImage($request->file, $path);
        } else {
            $fileName = $data->file_main;
        }
        if ($request->fileZoom != '') {
            $fileZoom = insertSingleImage($request->fileZoom, $path);
        } else {
            $fileZoom = $data->file_zoom;
        }
        MainProductModel::where('id_main', $id)->update([
            'relation_shops' => $request->relation_shops,
            'relation_brand' => $request->relation_brand,
            'relation_type' => $request->type_id,
            'relation_category' => $request->relation_category,
            'name_productTH' => $request->name_productTH,
            'shapeTH' => $request->shapeTH,
            'other_specialTH' => $request->other_specialTH,
            'decorative_styleTH' => $request->decorative_styleTH,
            'material_productTH' => $request->material_productTH,
            'care_instructionTH' => $request->care_instructionTH,
            'name_productEN' => $request->name_productEN,
            'shapeEN' => $request->shapeEN,
            'name_productEN' => $request->name_productEN,
            'other_specialEN' => $request->other_specialEN,
            'decorative_styleEN' => $request->decorative_styleEN,
            'material_productEN' => $request->material_productEN,
            'care_instructionEN' => $request->care_instructionEN,
            'ordering_period' => $pre_order,
            'detail_productTH' => $request->detail_productTH,
            'detail_productEN' => $request->detail_productEN,
            'MFD' => postDate($request->MFD),
            'EXP' => postDate($request->EXP),
            'file_main' => $fileName,
            'file_zoom' => $fileZoom
        ]);
        if (isset(request()->files) && count(request()->files) > 0) {
            $images = insertMultipleImage($request, $path, 'files');
            if (count($images) > 0) {
                foreach ($images As $img) {
                    $arrData = array(
                        'relation_company' => $request->relation_shops,
                        'relation_main' => $id,
                        'name_img' => $img,
                    );
                    DB::table('files_product')->insert($arrData);
                }
            }
        }
        return redirect(url('/backoffice/main_product'))->with('success', 'อัพเดทข้อมูลสำเร็จ');


    }

    public function delImage(Request $request, $id)
    {
            if (count($request->checkbox) > 0) {
                $data = DB::table('files_product')->whereIn('id_files', $request->checkbox)->get();
                foreach ($data AS $row) {
                    Storage::delete('main/' . $row->name_img);

                }
                DB::table('files_product')->whereIn('id_files', $request->checkbox)->delete();

                return redirect(url('/backoffice/main_product/'.$id.'/edit'))->with('success', 'ลบรูปภาพสำเร็จ');
            }
            else {
                return redirect(back())->with('info', 'กรุณาเลือกรูปภาพ');

            }

    }

    public function destroy($id)
    {

    }

    public function queryDatatable()
    {
        $data = MainProductModel::query()
            ->leftJoin('hk_brand AS b', 'hk_main.relation_brand', 'b.id_brand')
            ->leftJoin('hk_category AS c', 'hk_main.relation_category', 'c.id_category')
            ->leftJoin('hk_type AS t', 'hk_main.relation_type', 't.id_type')
            ->leftJoin('hk_company AS co', 'hk_main.relation_shops', 'co.id_company')
            ->get();
        return Datatables::of($data)->addIndexColumn()
            ->addcolumn('No', '')
            ->addColumn('Manage', function ($data) {
                $Manage = buttonManageData($data->id_main, true, true, true, 'backoffice/main_product');
                return $Manage;
            })
            ->addColumn('Img', function ($data) {
                $img = '<img src="' . url('storage/main/' . $data->file_main) . '" style="width:100px;height:100px">';
                return $img;
            })
            ->rawColumns(['No', 'Img', 'Manage'])
            ->make(true);
    }

    public function changeCate($id)
    {
        $data = CategoryModel::where('id_category', $id)->first();
        $type = DB::table('hk_type')->where('id_type', $data->type_id)->first();
        $array = ['type_name' => $type->name_typeTH, 'type_id' => $type->id_type];
        return response()->json($array);


    }

}
