<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullNameController;
use App\Http\Controllers\StudentController;


// Route::get('/', function () {
//     return view('welcome');
// });
//GET
Route::get('/',[Homecontroller::class,'index'])->name('home');
Route::get('/about',[Homecontroller::class,'about'])->name('about');
Route::get('/cotact',[Homecontroller::class,'contact'])->name('contact');
Route::get('/details/{id}',[Homecontroller::class,'details'])->name('details');
Route::get('/assesment',[Homecontroller::class,'assesment'])->name('assesment');
Route::get('/dashboard',[Homecontroller::class,'dashboard'])->name('dashboard');
Route::get('/student',[StudentController::class,'index'])->name('student.index');
Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
Route::get('/student/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
Route::get('/student/destroy/{id}',[StudentController::class,'destroy'])->name('student.destroy');
// POST
Route::post('/full-name',[FullNameController::class,'index'])->name('full-name');
Route::post('/student/store',[StudentController::class,'store'])->name('student.store');
Route::post('/student/update/{id}',[StudentController::class,'update'])->name('student.update');

//GET /Customer

Route::get('/customer',[CustomerController::class,'index'])->name('customer.index');
Route::get('/customer/create',[CustomerController::class,'create'])->name('customer.create');
Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
Route::get('/customer/destroy/{id}',[CustomerController::class,'destroy'])->name('customer.destroy');
//POST /Customer
Route::post('/customer/store',[CustomerController::class,'store'])->name('customer.store');
Route::post('/customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');
