<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\AllProductModel;
use App\Model\repairModel;
use Yajra\Datatables\Datatables;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use Validator;
use DB;
use Storage;


class SellController extends Controller
{

    public function index()
    {
        // return view('backoffice.Color.index');

        $allproducts = AllProductModel::all();

        $data = array(
            'allproducts' => $allproducts,

        );


        return view('page.sell',$data);
    }

    public function create()
    {
        return view('backoffice.Color.create');

    }

    public function store(Request $request)
    {
        $data = new AllProductModel;
        $data->name = $request->name;
        $data->unit = $request->unit;
        $data->priceperunit = $request->priceperunit;
        $data->totalvalue = $request->totalvalue;
        $data->date_come = $request->date_come;
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
        $data->withdraw = '0';
        $data->status = '0';



        // $data2 = new repairModel;
        // $data2->repair_fk = $data->id;
        // dd($data2);
        
        // $data->date_repair = $request->date_repair;
        // $sub_repair = $request->sub_repair;
        // $amount = $request->amount;
        // $note = $request->note;
        $data->save();

        // dd($data->date_repair);

        return redirect('allproduct');


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
     AllProductModel::destroy($id);

     return 'success' ;

 }

public function export() 
{
    return Excel::download(new UsersExport, 'users.xlsx');
}

}
