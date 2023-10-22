<?php

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

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'] )->name('index');



Route::group(['prefix'=>"appointment" , "as"=>"appointment."],function (){
    Route::get("create",[\App\Http\Controllers\AppointmentController::class,"createAppointment"])->name('create');
    Route::post("store",[\App\Http\Controllers\AppointmentController::class,"store"])->name('store');


});

Route::group(['prefix'=>"contact" , "as"=>"contact."],function (){
    Route::get("create",[\App\Http\Controllers\ContactsController::class,"create"])->name('create');
    Route::post("store",[\App\Http\Controllers\ContactsController::class,"store"])->name('store');


});

Route::group(['prefix'=>"feedback" , "as"=>"feedback."],function (){
    Route::get("create",[\App\Http\Controllers\FeedbackController::class,"create"])->name('create');
    Route::post("store",[\App\Http\Controllers\FeedbackController::class,"store"])->name('store');
});


