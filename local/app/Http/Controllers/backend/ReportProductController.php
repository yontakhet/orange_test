<?php
        namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use Storage;
class ReportProductController extends Controller
{
    public function index()
    {
            return view('backoffice.ReportProduct.index');

    }

    public function create()
    {
            return view('backoffice.ReportProduct.create');

    }

    public function store(Request $request)
    {


    }

    public function show($id)
    {
            return view('backoffice.ReportProduct.show');

    }

    public function edit($id)
    {
            return view('backoffice.ReportProduct.edit');
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