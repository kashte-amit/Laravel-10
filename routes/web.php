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

Route::get('/home', function () {
  $blogs = [
    [
      'title' => 'title one',
      'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda eaque reprehenderit repudiandae eligendi nulla qui quae sapiente totam',
      'status' => 'A'
    ],
    [
      'title' => 'title two',
      'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda eaque reprehenderit repudiandae eligendi nulla qui quae sapiente totam',
      'status' => 'D'
    ],
    [
      'title' => 'title three',
      'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda eaque reprehenderit repudiandae eligendi nulla qui quae sapiente totam',
      'status' => 'A'
    ],
    [
      'title' => 'title four',
      'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda eaque reprehenderit repudiandae eligendi nulla qui quae sapiente totam',
      'status' => 'D'
    ],
    [
      'title' => 'title five',
      'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda eaque reprehenderit repudiandae eligendi nulla qui quae sapiente totam',
      'status' => 'A'
    ]
  ];

  return view('pages.home', compact('blogs'));
});

Route::get('/about', function(){
  $string1 = 'About page';
  $string2 = 'This site is developed using Laravel 10';

  return view('pages.about', ['string1' => $string1, 'string2' => $string2]);
})->name('hello');

Route::get('/contact', function(){
  $string1 = 'Contact page';
  $string2 = 'Thank you for contacting us.';

  return view('pages.contact', compact('string1', 'string2'));
});

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