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
    return view('welcome');
});

Route::get('admin-dashboard','App\Http\Controllers\DashboardController@dashboard');
Route::get('addNewDonor','App\Http\Controllers\DonorController@index');
Route::post('add_donor_to_DB','App\Http\Controllers\DonorController@store');
Route::get('allDonors','App\Http\Controllers\DonorController@allDonors')->name('allDonors');


Route::get('remove-donor/{id}','App\Http\Controllers\DonorController@destroy');
Route::get('edit-donor/{id}','App\Http\Controllers\DonorController@edit');
Route::post('updateDonor/{id}','App\Http\Controllers\DonorController@update');





Route::get('add-recipient','App\Http\Controllers\RecipientController@index');
Route::post('addRecipienttoDB','App\Http\Controllers\RecipientController@store');
Route::get('/allRecipient','App\Http\Controllers\DashboardController@test');


Route::get('add-employee','App\Http\Controllers\EmployeeController@index');
Route::post('addEmployee','App\Http\Controllers\EmployeeController@store');
Route::get('show-employee','App\Http\Controllers\EmployeeController@show')->name('employee.show');
Route::get('edit-employee/{id}','App\Http\Controllers\EmployeeController@edit');
Route::post('updateEmployee/{id}','App\Http\Controllers\EmployeeController@update');
Route::get('remove-employee/{id}','App\Http\Controllers\EmployeeController@destroy');




Route::get('donation','App\Http\Controllers\DonationController@index');
Route::post('addDonation','App\Http\Controllers\DonationController@store');





Route::get('add-transaction','App\Http\Controllers\TransactionController@index');
Route::post('addTransaction','App\Http\Controllers\TransactionController@store');
Route::get('all-transaction','App\Http\Controllers\TransactionController@show');



Route::post('logout', 'App\Http\Controllers\DashboardController@logout')->name('logout');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
