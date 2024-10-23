<?php

use App\Http\Controllers\AppointmentController;
use App\Models\Appointment;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('appointments', AppointmentController::class);
