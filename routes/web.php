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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getUser/{user}/{pass}','LoginController@GetUser');
Route::get('/getEmployee/{employeeId}','LoginController@GetEmployee');
Route::get('/insertWithdrawData/{Code}/{Employee_id}/{Description}/{Amount}/{Status}/{Create_Datetime}/{Update_Datetime}','WithdrawController@InsertWithdrawData');
Route::get('/getPettyCashNumber','WithdrawController@GetPettyCashNumber');
Route::get('/updatePettyCashNumber/{number}','WithdrawController@UpdatePettyCashNumber');
Route::get('/employee/getWithdraw/{employeeId}','ViewPettyCashController@GetWithdrawWithEmployeeId');
Route::get('/manager/getWithdraw/{managerId}','ViewPettyCashController@GetWithdrawWithManagerId');
Route::get('/finance/getWithdraw','ViewPettyCashController@GetWithdraw');
Route::get('/updateWithdrawStatus/{code}/{status}/{updateDatetime}','WithdrawController@UpdateWithdrawStatus');
Route::get('/sumPettyCashStatusApprove','WithdrawController@SumPettyCashStatusApprove');



