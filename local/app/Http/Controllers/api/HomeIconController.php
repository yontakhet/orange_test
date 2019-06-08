<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\HomeIconModel;
//use Datatables;

use Validator;
use DB;
use Storage;

class HomeIconController extends Controller
{
    public function index()
    {
        $data = HomeIconModel::all();

        return response()->json($data);
    }


    public function create()
    {
        return view('backoffice.home-icon.create');

    }


    public function store(Request $request)
    {
      $file =   insertSingleImage($request->icon_file,'home_icon');
      $data = new HomeIconModel;
      $data->file_icon = $file;
      $data->name_icon = $request->name_icon;
      $data->link_icon = $request->link_icon;
      $data->save();
return redirect(url('backoffice/home-icon'))->with('success','เพิ่มรูปภาพ แบนเนอร์เรียบร้อยแล้ว');

    }

    public function show($id)
    {
        dd("Test");
    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {




    }


    public function destroy($id)
    {

    }

    public function queryDatatable()
    {
        $data = HomeIconModel::query();

        return Datatables::of($data)->addIndexColumn()
            ->addColumn('No', "")
            ->addColumn('Img',function ($data){
                $img = '<img src="'.url('storage/home_icon/'.$data->file_icon).'" style="width:80px;height:80px">';
                return $img;
            })
            ->addColumn('link',function ($data){
                $link = ''.$data->link_icon.' <br><a class="btn btn-icon btn-info btn-outline" href="'.$data->link_icon.'" target="_blank"> <i class="icon wb-link" aria-hidden="true"></i>LINK</a>';
                return $link;
            })
            ->addColumn('Manage', function ($data){
                $Manage = buttonManageData($data->icon_home_id, true, true, true, 'backoffice/home-icon');
                return $Manage;
            })
            ->rawColumns(['No','Img','link','Manage'])
            ->make(true);
    }


//    Mobile-----------------------------------
//    public function ApiHomeIcon()
//    {
//        $coins = Coin::all();
//
//        return response()->json($coins);
//
//    }
}

