<?php
        namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use Storage;
class SetShipmentController extends Controller
{
    public function index()
    {
            return view('backoffice.SetShipment.index');

    }

    public function create()
    {
            return view('backoffice.SetShipment.create');

    }

    public function store(Request $request)
    {


    }

    public function show($id)
    {
            return view('backoffice.SetShipment.show');

    }

    public function edit($id)
    {
            return view('backoffice.SetShipment.edit');
    }

    public function update(Request $request, $id)
    {


    }

    public function destroy($id)
    {

    }

    public function queryDatatable()
    {

    }
    
}