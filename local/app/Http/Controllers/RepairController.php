<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\RepairModel;
use App\Model\AllProductModel;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use Storage;

class RepairController extends Controller
{

    public function index()
    {
        // return view('backoffice.Color.index');

        // $repairs = RepairModel::all();
       $repairs = DB::table('tb_repair')
       ->leftJoin('tb_allproduct', 'tb_repair.repair_fk', '=', 'tb_allproduct.id_allproduct')
       ->get();

       $data = array(
        'repairs' => $repairs,

    );


       return view('page.repair',$data);
   }

   public function create()
   {
    return view('backoffice.Color.create');

}

public function store(Request $request)
{

   $code = $request->code;
   $tags = AllProductModel::where('id_allproduct',$code)->first();

   $data = new RepairModel;
   $data->repair_department = $request->department;
   $data->repair_date = $request->date;
   $data->repair_receipt_number = $request->receipt_number;
   $data->repair_subject = $request->subject;
   $data->repair_code = $tags->code;
   $data->repair_symptoms = $request->symptoms;
   $data->repair_officer = $request->officer;
   $data->repair_position = $request->position;
   $data->date_officer = $request->date_officer;
   $data->repair_fk = $request->id;
   $data->save();

   return redirect('repair');
        // return redirect(url('/backoffice/color'))->with('success', 'เพิ่มข้อมูลข้อมูลสำเร็จ');


}

public function show($id)
{
    return view('backoffice.Color.show');

}

public function update(Request $request, $id)
{

        // dd($request);

    $data = RepairModel::find($id);
    $data->repair_department = $request->department;
    $data->repair_date = $request->date;
    $data->repair_receipt_number = $request->receipt_number;
    $data->repair_subject = $request->subject;
    $data->repair_code = $request->code;
    $data->repair_symptoms = $request->symptoms;
    $data->repair_officer = $request->officer;
    $data->repair_position = $request->position;
    $data->date_officer = $request->date_officer;
    $data->save();


}

public function destroy($id)
{
        // dd($id);
        // $all = RepairModel::destroy($id);
        // $all->delete();
 RepairModel::destroy($id);

 return 'success' ;

}

public function repairdetail($id)
{


    $repair = RepairModel::find($id);


    $repairs = DB::table('tb_repair')
    ->leftJoin('tb_allproduct', 'tb_repair.repair_fk', '=', 'tb_allproduct.id_allproduct')->where('id_dep',$id)
    ->first();

    $data = array(
        'repairs' => $repairs

    );

    // dd($data);
    return view('page.repairorderdetail',$data);


}

public function repairedit($id)
{

    $repair = RepairModel::find($id);


    $repairs = DB::table('tb_repair')
    ->leftJoin('tb_allproduct', 'tb_repair.repair_fk', '=', 'tb_allproduct.id_allproduct')->where('id_dep',$id)
    ->first();

    $data = array(
        'repairs' => $repairs

    );

        // dd($data);
    return view('page.repairedit',$data);

}

public function repairdetail_post($id)
{


  $allproduct = AllProductModel::find($id);

  return response()->json($allproduct);
}

public function repairdetail_get($id)

{
 $allproduct = AllProductModel::find($id);

 $data = array(
    'allproduct' => $allproduct,

);

 return view('page.withdraworder',$data);



}

public function repaircomplete($id)
{


    $repair = RepairModel::find($id);


    $repairs = DB::table('tb_repair')
    ->leftJoin('tb_allproduct', 'tb_repair.repair_fk', '=', 'tb_allproduct.id_allproduct')->where('id_dep',$id)
    ->first();

    $data = array(
        'repairs' => $repairs

    );

    // dd($data);
    return view('page.repaircomplete',$data);


}

}