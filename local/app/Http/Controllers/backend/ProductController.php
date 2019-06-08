<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use App\Model\MainProductModel;
use App\Model\ProductModel;
use App\Model\CompanyModel;
use App\Model\ColorModel;
use Storage;

class ProductController extends Controller
{
    public function index()
    {
        return view('backoffice.Product.index');

    }

    public function create()
    {
        $mains = MainProductModel::query()->get();
        $colors = ColorModel::query()->get();
        return view('backoffice.Product.create', compact('mains', 'colors'));

    }

    public function store(Request $request)
    {

        $product = ProductModel::query()->where('relation_main',$request->main)->where('price_supplier',postNumber($request->price_supplier))->get();
//        dd(count($product));
        if(count($product) > 0) {
            return redirect()->back()->withInput()->with('error', 'ราคาซ้ำกรุณาลองอีกครั้ง');

        }else{

            if ($request->file != '') {
                $fileName = insertSingleImage($request->file, 'product');
            } else {
                $fileName = '';
            }
            $checkCode = ProductModel::query()->get();
            $count = count($checkCode) + 1;
            $number = sprintf('%05d', $count);
            $code = 'HK' . $request->main . $number;
            $data = new ProductModel;
            $data->relation_main = $request->main;
            $data->code_shops = $request->code_product;
            $data->code_homekraft = $code;
            $data->color_product = $request->color;
            $data->file_color = $fileName;
            $data->finish_productTH = $request->finishTH;
            $data->finish_productEN = $request->finishEN;
            $data->patternTH = $request->patternTH;
            $data->patternEN = $request->patternEN;
            $data->size_dimension = $request->size;
            $data->weight_product = postNumber($request->weight);
            $data->width_product = postNumber($request->width);
            $data->length_product = postNumber($request->length);
            $data->height_product = postNumber($request->height);
            $data->price_promotion = postNumber($request->price_promotion);
            $data->price_supplier = postNumber($request->price_supplier);
            $data->sale_percen = postNumber($request->sale_percen);
            $data->sale_bath = postNumber($request->sale_bath);
            $data->save();
            return redirect(url('/backoffice/sub_product'))->with('success', 'เพิ่มเดทข้อมูลสำเร็จ');
        }

    }

    public function show($id)
    {
        return view('backoffice.Product.show');

    }

    public function edit($id)
    {
        $mains = MainProductModel::query()->get();
        $colors = ColorModel::query()->get();
        $data =  ProductModel::where('id_product',$id)->first();
        return view('backoffice.Product.edit', compact('mains', 'colors','id','data'));
//        return view('backoffice.Product.edit');
    }

    public function update(Request $request, $id)
    {
        $data = ProductModel::where('id_product',$id)->first();
        if ($request->file != '') {
            $fileName = insertSingleImage($request->file, 'product');
        } else {
            $fileName = $data->file_color;
        }
        ProductModel::where('id_product',$id)->update([
            'relation_main' => $request->main,
            'code_shops' => $request->code_product,
            'color_product' => $request->color,
            'file_color' => $fileName,
            'finish_productTH' => $request->finishTH,
            'finish_productEN' => $request->finishEN,
            'patternTH' => $request->patternTH,
            'patternEN' => $request->patternEN,
            'size_dimension' => $request->size,
            'weight_product' => postNumber($request->weight),
            'width_product' => postNumber($request->width),
            'length_product' => postNumber($request->length),
            'height_product'=> postNumber($request->height),
            'price_promotion' => postNumber($request->price_promotion),
            'price_supplier' => postNumber($request->price_supplier),
            'sale_percen' => postNumber($request->sale_percen),
            'sale_bath' => postNumber($request->sale_bath),
        ]);
        return redirect(url('/backoffice/sub_product'))->with('success', 'อัพเดทข้อมูลสำเร็จ');

    }

    public function destroy($id)
    {
      $data = ProductModel::query()->where('id_product',$id)->first();
        Storage::delete('product/'.$data->file_color);
        ProductModel::destroy($id);
    }

    public function queryDatatable()
    {
        $data = ProductModel::query()->leftJoin('hk_main AS m','hk_product.relation_main','m.id_main')
            ->leftJoin('hk_color AS co','hk_product.color_product','co.id_color')->get();
        return Datatables::of($data)->addIndexColumn()
            ->addcolumn('No', '')
            ->addColumn('Manage', function ($data) {
                $Manage = buttonManageData($data->id_product, false, true, true, 'backoffice/sub_product');
                return $Manage;
            })
            ->rawColumns(['No', 'Manage'])
            ->make(true);
    }

}
