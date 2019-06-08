<?php
        namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use Storage;
class BankController extends Controller
{
    public function index()
    {
            return view('backoffice.Bank.index');

    }

    public function create()
    {
            return view('backoffice.Bank.create');

    }

    public function store(Request $request)
    {


    }

    public function show($id)
    {
            return view('backoffice.Bank.show');

    }

    public function edit($id)
    {
            return view('backoffice.Bank.edit');
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