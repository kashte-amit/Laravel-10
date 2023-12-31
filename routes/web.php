<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//   return view('welcome');
// });

Route::get('/home', [PageController::class, 'homePage']);

Route::get('/about', [PageController::class, 'aboutPage'])->name('hello');

Route::get('/contact', [PageController::class, 'contactPage']);

Route::resource('/blog', BlogController::class);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'loginHandler'])->name('login.submit');

// Dynamic routes
Route::get('/user/{id}', function($id){
  return $id;
})->name('fetch-user');

// Naming routes
Route::get('/company', function(){
  return '<a href="'.route('hello').'">About</a>';
});

Route::get('/users', function(){
  return '<a href="'.route('fetch-user', '2').'">Fetch User</a>';
});

// Route Grouping
Route::group(['prefix'=>'customer'], function () {
  Route::get('/', function(){
    return view('pages.customer.list');
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