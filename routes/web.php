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
});


Route::get('/login', function () {
    return view('login');
});



Route::get('/cars', function () {
    return view('cars.index');
});
Route::get('/cars/create', function () {
    return view('cars.create');
});


Route::get('/car_types', function () {
    return view('cartypes.index');
});
Route::get('/car_types/create', function () {
    return view('cartypes.create');
});



Route::get('/wastes', function () {
    return view('wastes.index');
});
Route::get('/wastes/create', function () {
    return view('wastes.create');
});



Route::get('/waste_types', function () {
    return view('wastetypes.index');
});
Route::get('/waste_types/create', function () {
    return view('wastetypes.create');
});





Route::get('/drivers', function () {
    return view('drivers.index');
});
Route::get('/drivers/create', function () {
    return view('drivers.create');
});




Route::get('/trips', function () {
    return view('trips.index');
});
Route::get('/trips/create', function () {
    return view('trips.create');
});




Route::get('/reports/daily', function () {
    return view('reports.daily');
});
Route::get('/reports/cars', function () {
    return view('reports.cars');
});
Route::get('/reports/drivers', function () {
    return view('reports.drivers');
});
Route::get('/reports/trips', function () {
    return view('reports.trips');
});
Route::get('/reports/wastes', function () {
    return view('reports.wastes');
});




Route::get('/users', function () {
    return view('users.index');
});
Route::get('/users/create', function () {
    return view('users.create');
});


Route::get('/support', function () {
    return view('support');
});