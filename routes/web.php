<?php

use App\Models\Listing;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing 

//All listings
Route::get('/', 'App\Http\Controllers\ListingController@index');

// Show reach page
Route::get('/listings/reach', 'App\Http\Controllers\ListingController@reach');

// Show about page
Route::get('/listings/about', 'App\Http\Controllers\ListingController@about');

//show Test page
Route::get('/listings/dashboard', 'App\Http\Controllers\ListingController@dashboard')
->middleware('auth');

//show create form
Route::get('/listings/create', 'App\Http\Controllers\ListingController@create')
->middleware('auth');

//Store listing Data
Route::post('/listings', 'App\Http\Controllers\ListingController@store')
->middleware('auth');

//Show Edit Form
Route::get('/listings/{listing}/edit', 'App\Http\Controllers\ListingController@edit')
->middleware('auth');

//Update Listing
Route::put('/listings/{listing}', 'App\Http\Controllers\ListingController@update')
->middleware('auth');

//Delete Listing
Route::delete('/listings/{listing}', 'App\Http\Controllers\ListingController@destroy')
->middleware('auth');

//Manage listings
Route::get('/listings/manage', 'App\Http\Controllers\ListingController@manage')
->middleware('auth');

//Single listing
Route::get('/listings/{listing}', 'App\Http\Controllers\ListingController@show');

//Show Register/Create Form
Route::get('/register', 'App\Http\Controllers\UserController@register');

//Create new user
Route::post('/users', 'App\Http\Controllers\UserController@store');

//Log User out
Route::post('/logout', 'App\Http\Controllers\UserController@logout')
->middleware('auth');

//Show Login Form
Route::get('/login', 'App\Http\Controllers\UserController@login')->name('login')
->middleware('guest');

//Login In User
Route::post('/users/authenticate', 'App\Http\Controllers\UserController@authenticate');
