<?php
        namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use Storage;
class ImportProductController extends Controller
{
    public function index()
    {
            return view('backoffice.ImportProduct.index');

    }

    public function create()
    {
            return view('backoffice.ImportProduct.create');

    }

    public function store(Request $request)
    {


    }

    public function show($id)
    {
            return view('backoffice.ImportProduct.show');

    }

    public function edit($id)
    {
            return view('backoffice.ImportProduct.edit');
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