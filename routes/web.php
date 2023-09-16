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

Route::get('/', function () {
  return view('welcome');
});

Route::get('/about', function(){
  return "<h1>About</h1>";
})->name('hello');

Route::get('/contact', function(){
  return "<h1>Contact</h1>";
});

// Dynamic routes
Route::get('/user/{id}', function($id){
  return $id;
})->name('fetch-user');

// Naming routes
Route::get('/home', function(){
  return '<a href="'.route('hello').'">About</a>';
});

Route::get('/users', function(){
  return '<a href="'.route('fetch-user', '2').'">Fetch User</a>';
});

// Route Grouping
Route::group(['prefix'=>'customer'], function () {
  Route::get('/', function(){
      return "<h1>Customer List</h1>";
  });
  
  Route::get('/create', function(){
      return "<h1>Customer Add</h1>";
  });
  
  Route::get('/update', function(){
      return "<h1>Customer Update</h1>";
  });
});

// Route Methods

/**
 * GET      - Request a resource
 * POST     - Create a new resource
 * PUT      - Update a resource ( multiple resource )
 * PATCH    - Modify a resource ( single resource )
 * DELETE   - Delete a resource
 * OPTIONS  -
 */

 // Fallback Route
Route::fallback(function(){
  return "Route does not exist";
});