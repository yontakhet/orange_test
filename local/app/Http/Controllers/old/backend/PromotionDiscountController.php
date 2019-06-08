<?php
        namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use Storage;
class PromotionDiscountController extends Controller
{
    public function index()
    {
            return view('backoffice.PromotionDiscount.index');

    }

    public function create()
    {
            return view('backoffice.PromotionDiscount.create');

    }

    public function store(Request $request)
    {


    }

    public function show($id)
    {
            return view('backoffice.PromotionDiscount.show');

    }

    public function edit($id)
    {
            return view('backoffice.PromotionDiscount.edit');
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