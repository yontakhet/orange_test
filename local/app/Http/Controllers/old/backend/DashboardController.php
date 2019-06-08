<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    public function index()
    {

        return view('backoffice.dashboard.index');
    }


    public function create()
    {
    }


    public function store(Request $request)
    {



    }

    public function show($id)
    {
        dd("Test");
    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {




    }


    public function destroy($id)
    {

    }



}
