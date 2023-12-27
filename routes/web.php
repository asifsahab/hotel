<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\{
    IndexController,
    CityController,
    RoomController,
};



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

Route::get('/',[HomeController::class,'index'])->name('index');


Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/booking',[HomeController::class,'booking'])->name('booking');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/room',[HomeController::class,'room'])->name('room');
Route::get('/service',[HomeController::class,'service'])->name('service');
Route::get('/team',[HomeController::class,'team'])->name('team');
Route::get('/testimonial',[HomeController::class,'testimonial'])->name('testimonial');


Route::controller(CityController::class)->group(function () {
Route::get('/city','city')->name('city');
Route::post('/city/submit', 'submit')->name('citysubmit');
Route::get('/city/data','cityData')->name('citydata');
Route::get('/city/delete/{id}','cityDelete')->name('citydelete');
Route::get('/city/update/{id}','cityUpdate')->name('cityupdate');
Route::post('/updated/{id}', 'updated')->name('updated');
});


Auth::routes();

Route::get('/admin/home', [IndexController::class, 'admin'])->name('home');

Route::get('/room/category', [RoomController::class, 'category'])->name('roomcategory');
Route::post('/room/category/submit', [RoomController::class, 'submitcategory'])->name('categorysubmit');
Route::get('/category/data', [RoomController::class,'categoryData'])->name('categorydata');
Route::get('/category/delete/{id}', [RoomController::class,'categoryDelete'])->name('categorydelete');
Route::get('/category/update/{id}', [RoomController::class, 'categoryUpdate'])->name('categoryupdate');
Route::post('/category/updated{id}', [RoomController::class, 'updated'])->name('categoryupdated');



Route::get('/roomregister',[IndexController::class,'roomregister'])->name('roomregister');
Route::post('/roomsubmit', [RoomController::class, 'roomsubmit'])->name('submitroom');
Route::get('/roomregister/data', [RoomController::class,'registerData'])->name('registerdata');
Route::get('/room/delete/{hotelname}', [RoomController::class,'roomDelete'])->name('roomdelete');
Route::get('/room/update/{id}', [RoomController::class, 'roomUpdate'])->name('roomupdate');

Route::post('/sreach', [RoomController::class, 'search'])->name('search');


