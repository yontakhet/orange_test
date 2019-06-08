<?php
        namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use Storage;
class ReportSaleController extends Controller
{
    public function index()
    {
            return view('backoffice.ReportSale.index');

    }

    public function create()
    {
            return view('backoffice.ReportSale.create');

    }

    public function store(Request $request)
    {


    }

    public function show($id)
    {
            return view('backoffice.ReportSale.show');

    }

    public function edit($id)
    {
            return view('backoffice.ReportSale.edit');
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