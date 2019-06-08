<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\WithdrawModel;
use App\Model\AllProductModel;
use App\Model\ColorModel;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use Storage;


class WithdrawController extends Controller
{

    public function index()
    {

        $allproducts = AllProductModel::all();
        $withdraws = DB::table('tb_withdraw')
        ->leftJoin('tb_allproduct', 'tb_withdraw.withdraw_fk', '=', 'tb_allproduct.id_allproduct')
        ->get();

        $data = array(
            'allproducts' => $allproducts,
            'withdraws' => $withdraws

        );

        return view('page.withdraw',$data);
    }

    public function create()
    {
        return view('backoffice.Color.create');

    }

    public function store(Request $request)
    {
        $code = $request->id;
        $tags = AllProductModel::where('id_allproduct',$code)->first();

        $data = new WithdrawModel;
        $data->code = $tags->code;
        $data->location = $request->location;
        $data->requisition = $request->requisition;
        $data->service_for = $request->service_for;
        $data->category = $request->category;
        $data->typemoney = $request->typemoney;
        $data->jobnumber = $request->jobnumber;
        $data->responsibleagency = $request->responsibleagency;
        $data->department = $request->department;
        $data->location_get = $request->location_get;
        $data->responsibleagency_send = $request->responsibleagency_send;
        $data->department_send = $request->department_send;
        $data->location_send = $request->location_send;
        $data->withdrawal = $request->withdrawal;
        $data->see = $request->see;
        $data->purchase = $request->purchase;
        $data->amount = $request->amount;
        $data->inspector = $request->inspector;
        $data->date = $request->date;
        $data->pathfinder = $request->pathfinder;
        $data->date1 = $request->date1;
        $data->withdraw_status = 0;
        $data->withdraw_fk = $request->id;
        $data->save();

        $update = AllProductModel::find($request->id);
        $update->withdraw = 1;
        $update->save();

        return redirect('withdraw');

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

     withdrawModel::destroy($id);

     return 'success' ;

 }

 public function withdrawdetail_get($id)

 {
   $allproduct = AllProductModel::find($id);

   $data = array(
    'allproduct' => $allproduct,

);

   return view('page.withdraworder',$data);

}

public function find(Request $request)
{
    $term = trim($request->q);

    if (empty($term)) {
        return \Response::json([]);
    }

    $formatted_tags = [];

    $roles = AllProductModel::Where('code', 'like', '%' . $term . '%')->where('status', 1)->where('withdraw', 0)->get();

    return response()->json($roles);
    
}
public function detail($id){
    $withdraw = WithdrawModel::find($id);
    $data = array(
        'withdraw' => $withdraw

    );
    return view('page.withdraworderdetail',$data);
}

public function detail_get($id){

    $allproduct = AllProductModel::find($id);
    $withdraw = WithdrawModel::find($id);
    $data = array(
        'allproduct' => $allproduct,
        'withdraw' => $withdraw
    );

    return response()->json($data);

}
public function withdrawdetail($id)
{


  $allproduct = AllProductModel::find($id);

  return response()->json($allproduct);
}

}
