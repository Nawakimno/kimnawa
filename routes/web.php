<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\test;
use App\Http\Controllers\InputNameController;
use App\Http\Controllers\YearVerificationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DebtorController;
use App\Http\Controllers\HomeController;


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
})->name('welcome');


Route::get('/greeting', function () {
    return 'Hello World';
});
Auth::routes();
Route::get('/gallery', function(){
    return view('gallery');


});
Route::get('/login', function(){
    return view('login');


});
Route::get('/dashboard', function(){
    return view('dashboard ');


})->middleware('auth.user');


    route::get('test.test', [test::class,"testblade"]);     

    Auth:: routes();
    
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route:: resource('companies', CompanyController:: class);



Route::get('/login2',[LoginController::class,'verification1'])->name('login2');
Route::post('/login2',[LoginController::class,'verification2'])->middleware('logincheck');

// Route::get('/dashboard',function(){
//     return view('dashboard');

// })->name('dashboard');

Route::resource('employees', EmployeeController::class);
Route::resource('debtors', DebtorController::class);



Route::get('/',[HomeController::class,'index']);

Route::get('/dashboard', function () {
    return view('employees.index');
})->name('neil');




 











Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
