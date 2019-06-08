<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Yajra\Datatables\Datatables;

use Validator;
use DB;
use Storage;

class MemberController extends Controller
{
    public function index()
    {
        return view('backoffice.member.index');
    }


    public function create()
    {
        return view('backoffice.member.create');

    }


    public function store(Request $request)
    {


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

