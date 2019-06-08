<?php
        namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use Storage;
class PaymentSuccessController extends Controller
{
    public function index()
    {
            return view('backoffice.PaymentSuccess.index');

    }

    public function create()
    {
            return view('backoffice.PaymentSuccess.create');

    }

    public function store(Request $request)
    {


    }

    public function show($id)
    {
            return view('backoffice.PaymentSuccess.show');

    }

    public function edit($id)
    {
            return view('backoffice.PaymentSuccess.edit');
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