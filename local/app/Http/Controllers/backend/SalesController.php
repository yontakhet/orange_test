<?php
        namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use Storage;
class SalesController extends Controller
{
    public function index()
    {
            return view('backoffice.Sales.index');

    }

    public function create()
    {
            return view('backoffice.Sales.create');

    }

    public function store(Request $request)
    {


    }

    public function show($id)
    {
            return view('backoffice.Sales.show');

    }

    public function edit($id)
    {
            return view('backoffice.Sales.edit');
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