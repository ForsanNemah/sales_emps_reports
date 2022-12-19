<?php

use Illuminate\Support\Facades\Route;
 

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.login');
});



Route::group(['middleware' => ['auth']], function () { 


    Route::get('/dash_admin', function () {

        return view('admin.html.index');
        
    })->name('dash_admin');




    Route::get('/dash_emp', function () {

        return view('admin.html.index_emp');
        
    })->name('dash_emp');





    Route::get('/emp_create',[App\Http\Controllers\EmpsController::class,'create'])->name('emp_create');
    Route::POST('/emp_store',[App\Http\Controllers\EmpsController::class,'store'])->name('emp_store');
    Route::get('/emp_index',[App\Http\Controllers\EmpsController::class,'index'])->name('emp_index');
    Route::get('/emp_update',[App\Http\Controllers\EmpsController::class,'update'])->name('emp_update');


    Route::resource('/emp_destroy',App\Http\Controllers\EmpsController::class);
    Route::resource('/customers',App\Http\Controllers\CustomerController::class);


    Route::get('/customer_add_with_mony',[App\Http\Controllers\CustomerController::class,'create2'])->name('customer_add_with_mony');


    Route::get('/emp_report/{emp_id}',[App\Http\Controllers\EmpsReports::class,'emp_report_daily'])->name('emp_report');
    Route::get('/emp_report_full/{emp_id}',[App\Http\Controllers\EmpsReports::class,'emp_report_full'])->name('emp_report_full');
    Route::get('/full_all_emps_report',[App\Http\Controllers\EmpsReports::class,'full_all_emps_report'])->name('full_all_emps_report');
    Route::get('/emp_report_no_edit/{emp_id}',[App\Http\Controllers\EmpsReports::class,'emp_report_no_edit'])->name('emp_report_no_edit');
   

   
    Route::get('/index_emp', function () {
        return view('admin.html.index_emp');
    })->name('index_emp');


    Route::get('/index', function () {
        return view('admin.html.index');
    })->name('index');



   
 
    

    
});
 

Route::get('/map', function () {
    return view('admin.html.map');
})->name('map');



Route::get('/gcl', function () {
    return view('admin.html.get_current_location');
})->name('map');



Route::get('google-autocomplete', [App\Http\Controllers\GoogleController::class, 'index']);



Route::POST('/set_session','App\Http\Controllers\ajax@index')->name('set_session');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





 


