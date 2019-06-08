<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use Storage;
use App\Model\ShipmentModel;

class DetailShipmentController extends Controller
{
    public function index()
    {
        return view('backoffice.DetailShipment.index');

    }

    public function create()
    {
        return view('backoffice.DetailShipment.create');

    }

    public function store(Request $request)
    {
        $data = new ShipmentModel;
        $data->name_shipmentTH = $request->name_shipmentTH;
        $data->name_shipmentEN = $request->name_shipmentEN;
        $data->detail_shipmentTH = $request->detail_shipmentTH;
        $data->detail_shipmentEN = $request->detail_shipmentEN;
        $data->save();
        return (redirect(url('backoffice/detail_shipment'))->with('success', 'เพิ่มข้อมูลสำเร็จ'));

    }

    public function show($id)
    {
        return view('backoffice.DetailShipment.show');

    }

    public function edit($id)
    {
        $data = ShipmentModel::query()->where('id_shipment', $id)->first();
        return view('backoffice.DetailShipment.edit', compact('id', 'data'));
    }

    public function update(Request $request, $id)
    {
        ShipmentModel::query()->where('id_shipment', $id)->update([
            'name_shipmentTH' => $request->name_shipmentTH,
            'name_shipmentEN' => $request->name_shipmentEN,
            'detail_shipmentTH' => $request->detail_shipmentTH,
            'detail_shipmentEN' => $request->detail_shipmentEN,
        ]);
        return (redirect(url('backoffice/detail_shipment'))->with('success', 'อัพเดทข้อมูลสำเร็จ'));

    }

    public function destroy($id)
    {
        ShipmentModel::destroy($id);
    }

    public function queryDatatable()
    {
        $data = ShipmentModel::query()->get();
        return Datatables::of($data)->addIndexColumn()
            ->addcolumn('No', '')
            ->addColumn('detailTH', function ($data) {
                $val = nl2br($data->detail_shipmentTH);
                return $val;
            })
            ->addColumn('detailEN', function ($data) {
                $val = nl2br($data->detail_shipmentEN);
                return $val;
            })
            ->addColumn('Manage', function ($data) {
                $Manage = buttonManageData($data->id_shipment, false, true, true, 'backoffice/detail_shipment');
                return $Manage;
            })
            ->rawColumns(['No', 'detailTH', 'detailEN', 'Manage'])
            ->make(true);
    }

}
