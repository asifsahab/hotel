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



Route::get('/roomregister',[IndexController::class,'roomregister'])->name('roomregister');
Route::get('/city',[IndexController::class,'city'])->name('city');


Auth::routes();

Route::get('/admin/home', [IndexController::class, 'admin'])->name('home');
Route::post('/city/submit', [CityController::class, 'submit'])->name('citysubmit');
Route::get('/room/category', [RoomController::class, 'index'])->name('roomcategory');
Route::post('/room/category/submit', [RoomController::class, 'submitcategory'])->name('categorysubmit');
Route::post('/roomsubmit', [RoomController::class, 'roomsubmit'])->name('submitroom');
