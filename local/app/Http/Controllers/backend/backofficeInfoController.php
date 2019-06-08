<?php
        namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use Storage;
use App\Model\UserModel;
class backofficeInfoController extends Controller
{
    public function index()
    {
            return view('backoffice.backofficeInfo.index');

    }

    public function create()
    {
            return view('backoffice.backofficeInfo.create');

    }

    public function store(Request $request)
    {


    }

    public function show($id)
    {
            return view('backoffice.backofficeInfo.show');

    }

    public function edit($id)
    {
            return view('backoffice.backofficeInfo.edit');
    }

    public function update(Request $request, $id)
    {


    }

    public function destroy($id)
    {

    }

    public function queryDatatable()
    {
     $data = UserModel::query()->where('stat_admin', '!=', 'poweradmin')->get();
        return Datatables::of($data)->addIndexColumn()
            ->addcolumn('No', '')
            ->addColumn('Manage', function ($data) {
                $Manage = buttonManageData($data->id_admin, true, true, true, 'backoffice/backoffice_info');
                return $Manage;
            })
        
            ->rawColumns(['No', 'Img', 'Manage'])
            ->make(true);
    }
    
}
