<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Model\LineModel;
use Validator;
use DB;
use Storage;
use App\Model\ColorModel;

class LineController extends Controller
{
  public function index()
  {

  }

  public function create()
  {
    // return view('backoffice.Color.create');

  }

  public function store(Request $request)
  {
    // dd($request);
        // $data = new ColorModel;
        // $data->name_colorTH = $request->name_colorTH;
        // $data->name_colorEN = $request->name_colorEN;
        // $data->save();
        // return redirect(url('/backoffice/color'))->with('success', 'เพิ่มข้อมูลข้อมูลสำเร็จ');


  }

  public function show($id)
  {
    return view('backoffice.Color.show');

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



  public function linedetail($id)
  {

    $lines = DB::table('tb_line')->where('fk_key', $id)->get();

    $data = array(
      'lines' => $lines,

    );

    dd($data);
    
    return view('page.product',$data);



    // return view('page.product');

    // $data = array(
    //   'lines' => $lines,

    // );


  }



}
