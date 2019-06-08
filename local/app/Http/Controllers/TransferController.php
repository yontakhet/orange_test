<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\AllProductModel;
use App\Model\TransferModel;
use App\Model\ColorModel;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use Storage;

class TransferController extends Controller
{

   public function index()
   {
        // return view('backoffice.Color.index');

    $allproducts = AllProductModel::all()->where('withdraw',1)->where('status',1);
    $transfers = DB::table('tb_transfer')
    ->leftJoin('tb_allproduct', 'tb_transfer.transfer_fk', '=', 'tb_allproduct.id_allproduct')->where('transfer_status',0)->get();

    $data = array(
        'allproducts' => $allproducts,
        'transfers' => $transfers,

    );

    // dd($transfers);

    return view('page.transfer',$data);
}



public function store(Request $request)
{

    $data = new TransferModel;
    $data->transfer_code = $request->code;
    $data->transfer_ordernumber = $request->ordernumber;
    $data->transfer_accept = $request->accept;
    $data->transfer_responsible = $request->responsible;
    $data->transfer_department = $request->department;
    $data->transfer_location = $request->location;
    $data->transfer_namepay = $request->namepay;
    $data->transfer_date = $request->date;
    $data->transfer_nameget = $request->nameget;
    $data->transfer_date1 = $request->date1;
    $data->transfer_fk = $request->id;
    $data->save();

    return redirect('transfer');



}

public function detail($id)
{
    $find = AllProductModel::find($id);
    $data = array(
        'find' => $find
    );
    return view('page.transferproduct',$data);

}

public function transferdetail($id)
{

    $find = DB::table('tb_transfer')
    ->leftJoin('tb_allproduct', 'tb_transfer.transfer_fk', '=', 'tb_allproduct.id_allproduct')->where('tb_transfer.id_transfer',$id)->first();
    $data = array(
        'find' => $find,
    );
    return view('page.transferdetail',$data);

}

}
