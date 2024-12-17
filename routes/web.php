<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeolocationController;


Route::get('/geolocator', function () {
    return view('geolocator');
});

Route::post('/geolocator/address-to-coordinates', [GeolocationController::class, 'addressToCoordinates'])
    ->name('geolocator.coordinates');

Route::post('/geolocator/calculate-distance', [GeolocationController::class, 'calculateDistance'])
    ->name('geolocator.distance');
