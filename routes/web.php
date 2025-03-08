<?php
date_default_timezone_set( 'Asia/Kolkata' );
$today = \Carbon\Carbon::today()->format( 'Y-m-d' );

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get( '/', 'AuthController@index' );
//Route::get( '/index', 'AuthController@index' );
//Route::get( '/signin', 'AuthController@signin' );
//Route::get( '/signup', 'AuthController@signup' );
//Route::get( '/profile', 'MainController@profile' );
//Route::post( '/updateprofile', 'AuthController@updateprofile' );
//Route::post( '/checkuser', 'AuthController@checkuser' );
//Route::post( '/checkadmin', 'AuthController@checkadmin' );
//Route::post( '/savesignup', 'AuthController@savesignup' );
//Route::post( '/changepw', 'AuthController@changepw' );
//Route::post( '/changestatus', 'AuthController@changestatus' );
//Route::post( '/changestatusk', 'AuthController@changestatusk' );
//Route::get( 'Dashboard', 'MainController@Dashboard' );
//Route::get('/empdetails', 'MainController@empdetails');
//Route::get('/attdetails', 'MainController@attdetails');
//Route::get('/taskdetails', 'MainController@taskdetails');
//Route::get('/customerdetails', 'MainController@customerdetails');
//Route::get('/task', 'MainController@task');
//Route::get('/emptask', 'MainController@emptask');
//Route::get('/showhistory', 'MainController@showhistory');
//Route::post('/updatetask', 'MainController@updatetask');
//Route::post('/updatetaskdesc', 'MainController@updatetaskdesc');
//Route::get('/chat', 'MainController@chat');
//Route::get( '/users', 'AuthController@users' );
//Route::get( '/customers', 'AuthController@customers' );
//Route::get( '/attendance', 'AuthController@attendance' );
//Route::get( '/role', 'AuthController@role' );
//Route::get( '/attreport', 'MainController@attreport' );
//Route::post( '/newcustomer', 'AuthController@newcustomer' );
//Route::post( '/role', 'AuthController@saverole' );
//Route::post( '/postsave', 'MainController@postsave' );
//Route::post( '/addlike', 'MainController@addlike' );
//Route::post( '/dislike', 'MainController@dislike' );
//Route::post( '/reviewsave', 'MainController@reviewsave' );
//Route::post( '/getattendancereport', 'MainController@getattendancereport' );
//Route::post( '/assignemployee', 'MainController@assignemployee' );
//Route::post( '/removeemployee', 'MainController@removeemployee' );
//Route::post( '/removetask', 'MainController@removetask' );
//Route::post( '/posttask', 'MainController@posttask' );
//Route::post( '/gettaskdetails', 'MainController@gettaskdetails' );
//Route::get( 'logout', 'AuthController@logout' );



Route::get( '/', 'vendor\AuthController@index' );
Route::get( 'vendor/login', 'vendor\AuthController@index' );
Route::post( 'vendor/checkuser', 'vendor\AuthController@checkuser' );
Route::get( 'vendor/Dashboard', 'vendor\HomeController@Dashboard' );
Route::get( 'vendor/purchase_orders', 'vendor\HomeController@purchase_orders' );
Route::get( 'vendor/logout', 'vendor\AuthController@index' );








