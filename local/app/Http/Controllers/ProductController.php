<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\LineModel;
use Yajra\Datatables\Datatables;
use App\Model\AllProductModel;
use App\Model\DurableModel;
use App\Model\DocumentModel;
use App\Model\HistoryModel;
use Validator;
use DB;
use Storage;

class ProductController extends Controller
{
  public function index()
  {
        // return view('backoffice.Color.index');
    return view('page.product');
  }

  public function create()
  {
    return view('backoffice.Color.create');

  }

  public function store(Request $request)
  {
    // dd($request);



  }

  public function show($id)
  {
    return view('backoffice.Color.show');

  }

  public function edit($id)
  {

    $data = AllProductModel::query()->where('id_allproduct', $id)->first();
    return view('page.productedit', compact('allproduct', 'id'));
  }

  public function update(Request $request)
  {

    // dd($request->category);

   $data = AllProductModel::find($request->id);
   $data->category = $request->category;
   $data->service_for = $request->service_for;
   $data->code_asa = $request->code_asa;
   $data->gfmis = $request->gfmis;
   $data->code = $request->code;
   $data->property = $request->property;
   $data->model = $request->model;
   $data->brand = $request->brand;
   $data->responsibleagency = $request->responsibleagency;
   $data->department = $request->department;
   $data->location = $request->location;
   $data->dealer = $request->dealer;
   $data->address = $request->address;
   $data->tel = $request->tel;
   $data->typemoney = $request->typemoney;
   $data->howtocome = $request->howtocome;
   $data->comment = $request->comment;
   $data->inspector = $request->inspector;
   $data->position = $request->position;
   $data->date = $request->date;
   $data->save();

   return redirect('allproduct');

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

  public function productdetail($id)
  {

    $allproduct = AllProductModel::find($id);
    $durables = DurableModel::all()->where('durable_fk',$id);
    $documents = DocumentModel::all()->where('note_fk',$id);
    $historys = HistoryModel::all()->where('history_fk',$id);
    $data = array(
      'allproduct' => $allproduct,
      'durables'  => $durables,
      'documents'  => $documents,
      'historys'  => $historys

    );
    return view('page.productdetail',$data);
    }
    public function productdetailaprove($id)
    {

      $allproduct = AllProductModel::find($id);
      $durables = DurableModel::all()->where('durable_fk',$id);
      $documents = DocumentModel::all()->where('note_fk',$id);
      $historys = HistoryModel::all()->where('history_fk',$id);
      $data = array(
        'allproduct' => $allproduct,
        'durables'  => $durables,
        'documents'  => $documents,
        'historys'  => $historys

      );

        // dd($data);
    return view('page.productdetailaprove',$data);

  }
  public function submitproductdetailaprove($id)
  {
    // dd($id);
    $allproduct = AllProductModel::find($id);
    $allproduct->status = 1;
    $allproduct->save();
    // $durables = DurableModel::all()->where('durable_fk',$id);
    // $documents = DocumentModel::all()->where('note_fk',$id);
    // $historys = HistoryModel::all()->where('history_fk',$id);
    // $data = array(
    //   'allproduct' => $allproduct,
    //   'durables'  => $durables,
    //   'documents'  => $documents,
    //   'historys'  => $historys

    // );

      // dd($data);
//   return view('page.productdetailaprove',$data);
  return redirect('allproduct');

}
  public function productedit($id)
  {

    $allproduct = AllProductModel::find($id);
    $durables = DurableModel::all()->where('durable_fk',$id);
    $documents = DocumentModel::all()->where('note_fk',$id);
    $historys = HistoryModel::all()->where('history_fk',$id);


    $data = array(
      'allproduct' => $allproduct,
      'durables'  => $durables,
      'documents'  => $documents,
      'historys'  => $historys

    );
  // dd($data);
    return view('page.productedit',$data);

  }




  public function linedetail($id)
  {

    $lines = DB::table('tb_line')->where('fk_key', $id)->get();

    return response()->json($lines);

  }

  public function code(Request $request)
  {

    $cc_id = $request->code;

    $tags = AllProductModel::where('code',$cc_id)->count();


    return response()->json($tags);

  }

  public function withdrawdetail($id)
  {


    $allproduct = AllProductModel::find($id);

    return response()->json($allproduct);
  }


  public function durable(Request $request)
  {

    $data = new DurableModel;
    $data->durable_fk = $request->id;
    $data->sub_durable = $request->sub_durable;
    $data->num_durable = $request->num_durable;
    $data->save();



  }

  public function delete_durable($id)
  {

   DurableModel::where('id_durable',$id)->delete();


 }
 public function document(Request $request)
 {

  $data = new DocumentModel;
  $data->note_fk = $request->id;
  $data->note = $request->sub_document;
  $data->date_note = $request->date_document;
  $data->number_note = $request->num_document;
  $data->save();



}

public function delete_document($id)
{

 DocumentModel::where('id_note',$id)->delete();


}

public function history(Request $request)
{

  $data = new HistoryModel;
  $data->history_fk = $request->id;
  $data->history_date = $request->history_date;
  $data->history_list = $request->history_list;
  $data->history_cur = $request->history_cur;
  $data->history_note = $request->history_note;
  $data->save();



}

public function delete_history($id)
{

 HistoryModel::where('id_history',$id)->delete();

}

}
