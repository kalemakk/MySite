<?php

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\IncomeController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dash',function (){
   return view('dashboard.index');
})->name('dash');



Route::get('all-income',[IncomeController::class,'getIncome'])->name('all-income');
Route::get('income',[IncomeController::class,'getUserIncome'])->name('income');
Route::post('income/save',[IncomeController::class,'saveIncome'])->name('save-income');
Route::patch('income/{income}/update',[IncomeController::class,'updateIncome'])->name('update-income');
Route::patch('income/{income}/delete',[IncomeController::class,'deleteIncome'])->name('delete-income');


Route::get('all-expenses',[ExpenseController::class,'getIncome'])->name('all-income');
Route::get('income',[IncomeController::class,'getUserIncome'])->name('income');
Route::post('income/save',[IncomeController::class,'saveIncome'])->name('save-income');
Route::patch('income/{income}/update',[IncomeController::class,'updateIncome'])->name('update-income');
Route::patch('income/{income}/delete',[IncomeController::class,'deleteIncome'])->name('delete-income');
