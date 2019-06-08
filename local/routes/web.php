<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/clc', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
        // Artisan::call('view:clear');
        // session()->forget('key');
    return "Cleared!";

 });
//frontend
Route::get('/', 'frontend\HomeController@viewIndex');
Route::get('/home', 'frontend\HomeController@viewIndex');

Route::get('/', function () {
	return view('page.index');
});

Route::get('register', function () {
	return view('page.register');
});
Route::middleware(['auth'])->group(function () {


	Route::resource('allproduct', 'AllProductController');
	Route::get('exportall', 'AllProductController@exportall')->name('exportall');
	Route::get('importExportView', 'AllProductController@importExportView');
    Route::post('import', 'AllProductController@import')->name('import');
    Route::get('export/{id}', 'AllProductController@export')->name('export');
	Route::get('importExportView/{id}', 'AllProductController@importExportView');
	Route::get('productcode', 'AllProductController@productcode');
	Route::post('delallproduct/product/{id}', 'AllProductController@destroy');

	// ManagePageController
	Route::get('maxproduct', 'ManagePageController@maxproduct');
	Route::get('lifereport', 'ManagePageController@lifereport');
	Route::get('historysell', 'ManagePageController@historysell');
	Route::get('repair', 'ManagePageController@repair');
	Route::get('repairreport', 'ManagePageController@repairreport');
	Route::get('managepermission', 'ManagePageController@managepermission');

// Product
	Route::resource('product', 'ProductController');
	Route::get('line/{id}', 'ProductController@linedetail');
	Route::post('code', 'ProductController@code');
	Route::post('product/update', 'ProductController@update');
	Route::get('productdetail/{id}', 'ProductController@productdetail');
    Route::get('productedit/{id}', 'ProductController@productedit');
    Route::get('productdetailaprove/{id}', 'ProductController@productdetailaprove');
    Route::get('submitproductdetailaprove/{id}', 'ProductController@submitproductdetailaprove');
	Route::post('durable','ProductController@durable');
	Route::post('document','ProductController@document');
	Route::post('history','ProductController@history');
	Route::post('delete/durable/{id}','ProductController@delete_durable');
	Route::post('delete/document/{id}','ProductController@delete_document');
	Route::post('delete/history/{id}','ProductController@delete_history');


// withdraworder
	Route::resource('withdraw', 'WithdrawController');
	Route::get('withdraworder', function () {
		return view('page.withdraworder');
	});

	Route::post('withdraw/product/{id}', 'WithdrawController@withdrawdetail');
	Route::get('withdraw/product/{id}', 'WithdrawController@withdrawdetail_get');
	Route::post('withdrawdetail/product/get/{id}', 'WithdrawController@detail_get');
	Route::get('withdrawdetail/product/{id}','WithdrawController@detail');
	Route::get('/tags/find', 'WithdrawController@find');


	// repair
	Route::resource('repair', 'RepairController');
	Route::get('repairorder', function() {
		return view('page.repairorder');
	});

	Route::get('repaircomplete/{id}', 'RepairController@repaircomplete');
	Route::post('repair/product/{id}', 'RepairController@repairdetail_post');
	Route::get('repair/product/{id}', 'RepairController@repairdetail_get');
	Route::get('repairdetail/{id}', 'RepairController@repairdetail');
	Route::get('repairedit/{id}', 'RepairController@repairedit');
	Route::post('delrepair/repair/{id}', 'RepairController@destroy');

	// Transfer
	Route::resource('transfer', 'TransferController');
	Route::get('transfer/product/{id}','TransferController@detail');
	Route::get('transferdetail/{id}','TransferController@transferdetail');

	// Sell
	Route::resource('sell', 'SellController');
	// Route::get('sell', 'SellController@sell');

});





//Datatables

// // Route::resource('managepermission', 'AllProductController');
// Route::post('allproductDatatables', 'AllProductController@anyData');

Route::post('managepermissionDatatables', 'ManagePermissionController@anyData')->middleware('role:Admin');
Route::post('managepermissionSelect', 'ManagePermissionController@managepermissionSelect')->middleware('role:Admin');
Route::post('managepermissionUpdate', 'ManagePermissionController@managepermissionUpdate')->middleware('role:Admin');

// Route::post('allproductconfirmDatatables', 'AllProductController@anyData');
Route::get('requisition/{id}','AllProductController@requisition');
Route::get('generate-pdf','AllProductController@generatePDF');

//Datatables



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

