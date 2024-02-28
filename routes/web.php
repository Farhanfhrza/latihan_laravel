<?php

use App\Http\Controllers\EventController;
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

// returns the home page with all posts
Route::get('/', EventController::class .'@index')->name('events.index');
// returns the form for adding a post
Route::get('/events/create', EventController::class . '@create')->name('events.create');
// adds a post to the database
Route::post('/events', EventController::class .'@store')->name('events.store');
// returns a page that shows a full post
Route::get('/events/{post}', EventController::class .'@show')->name('events.show');
// returns the form for editing a post
Route::get('/events/{post}/edit', EventController::class .'@edit')->name('events.edit');
// updates a post
Route::put('/events/{post}', EventController::class .'@update')->name('events.update');
// deletes a post
Route::delete('/events/{post}', EventController::class .'@destroy')->name('events.destroy');
