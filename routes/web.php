<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Backend\{
    IndexController,
    CityController,
    CategoryController,
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
Route::get('/', [HomeController::class,'index'])->name('index');

Auth::routes();



Route::middleware(['auth'])->group(function () {

    Route::get('/admin/home', [IndexController::class, 'admin'])->name('home');



// City Routes:
Route::controller(CityController::class)->group(function ()
{
    Route::get('/city','city')->name('city');
    Route::post('/city/submit', 'submit')->name('citysubmit');
    Route::get('/city/data','cityData')->name('citydata');
    Route::get('/city/delete/{city}','cityDelete')->name('citydelete');
    Route::get('/city/update/{city}','cityUpdate')->name('cityupdate');
    Route::post('/updated/{city}', 'updated')->name('updated');
});

// Category Routes:
Route::controller(CategoryController::class)->group(function()
{
Route::get('category',  'category')->name('category');
Route::post('category/submit',  'categorySubmit')->name('categorysubmit');
Route::get('/category/data', 'categoryData')->name('categorydata');
Route::get('/category/delete/{name}', 'categoryDelete')->name('categorydelete');
Route::get('/category/update/{name}',  'categoryUpdate')->name('categoryupdate');
Route::post('/category/updated{name}',  'updated')->name('categoryupdated');
});

Route::get('/contat/view', [ContactController::class, 'contactView'])->name('contactview');
Route::get('/booking/view',[BookingController::class,'bookingView'])->name('bookingview');


// Room Routes:
Route::controller(RoomController::class)->group(function()
{
  Route::get('/roomregister','roomregister')->name('roomregister');
  Route::post('/roomsubmit',  'roomsubmit')->name('roomsubmit');
  Route::get('/room/data', 'roomData')->name('roomdata');
  Route::get('/room/delete/{hotelname}', 'roomDelete')->name('roomdelete');
  Route::get('/room/update/{hotelname}',  'roomUpdate')->name('roomupdate');
  Route::post('/room/updated/{hotelname}',  'roomUpdated')->name('roomupdated');
});


});


// Client_side Route:
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/booking',[HomeController::class,'booking'])->name('booking');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/room',[HomeController::class,'room'])->name('room');
Route::get('/room/detail/{hotelname}',[HomeController::class,'roomdetail'])->name('detailroom');
Route::get('/room/booking/{hotelname}',[HomeController::class,'roombooking'])->name('roombooking');
Route::get('/service',[HomeController::class,'service'])->name('service');
Route::get('/team',[HomeController::class,'team'])->name('team');
Route::get('/testimonial',[HomeController::class,'testimonial'])->name('testimonial');

Route::post('/contat/submit', [ContactController::class, 'contactsubmit'])->name('contact.submit');

Route::post('/sreach', [RoomController::class, 'search'])->name('search');

Route::post('/booking/submit',[BookingController::class,'bookingsubmit'])->name('bookingsubmit');





