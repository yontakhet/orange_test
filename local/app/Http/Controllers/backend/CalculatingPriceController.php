<?php
        namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use Storage;
class CalculatingPriceController extends Controller
{
    public function index()
    {
            return view('backoffice.CalculatingPrice.index');

    }

    public function create()
    {
            return view('backoffice.CalculatingPrice.create');

    }

    public function store(Request $request)
    {


    }

    public function show($id)
    {
            return view('backoffice.CalculatingPrice.show');

    }

    public function edit($id)
    {
            return view('backoffice.CalculatingPrice.edit');
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