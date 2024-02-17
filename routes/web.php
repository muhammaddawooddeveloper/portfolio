<?php

use App\Http\Controllers\portfoliocontroller;
use App\Http\Controllers\teachercontroller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// start portfolio route

route::get('/' , function(){
    return view('portfolio');
})->name('portfolio.view');

route::get('allrecord' , function(){
return view('record');
});
route::get('pupdate' , function(){
    return view('pupdate');
    });
route::get('cv' , function(){
    return view('cv');
    });

Route::post("/portdata", [portfoliocontroller::class, 'add'])->name('portdata');

Route::get("/deleteall", [portfoliocontroller::class, 'deleteall'])->name('deleteall');

Route::get("/record", [portfoliocontroller::class, 'record'])->name('record');

Route::get("/delete/{id}", [portfoliocontroller::class, 'delete'])->name('delete');

Route::get("/update/{id}", [PortfolioController::class, 'updaterecord'])->name('dawood.update');

Route::get('/update/{id}', [portfoliocontroller::class, 'updaterecord'])->name('portfolio.update');
Route::get('update/{id}', [PortfolioController::class, 'update'])->name('update');
Route::get("update/{id}", [portfoliocontroller::class, 'update'])->name('update');

