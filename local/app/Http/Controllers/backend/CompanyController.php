<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use Storage;
use App\Model\CompanyModel;
use App\Model\BrandModel;

class CompanyController extends Controller
{
    public function index()
    {
        return view('backoffice.Company.index');

    }

    public function create()
    {
        $brands = BrandModel::query()->get();
        return view('backoffice.Company.create',compact('brands'));

    }

    public function store(Request $request)
    {


    }

    public function show($id)
    {
        return view('backoffice.Company.show');

    }

    public function edit($id)
    {
        return view('backoffice.Company.edit');
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
