<?php

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
})->name('home');

Route::get('/history', function () {
  return view('plateau.history');
})->name('history');

Route::get('/the-people', function () {
  return view('plateau.people');
})->name('people');


Route::get('at-a-glance', function () {
  return view('plateau.glance');
})->name('glance');

Route::get('/endowments', function () {
  return view('plateau.endowment');
})->name('endowment');


Route::get('/past-administrators', function () {
  return view('plateau.pastAdmins');
})->name('past-admins');
