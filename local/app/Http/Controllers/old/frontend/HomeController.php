<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Storage;
use Yajra\Datatables\Datatables;

class HomeController extends Controller
{
   public  function viewIndex(){
       return view('page.index');
   }

}
