<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;

Route::get('/', function () {
    return view('Home.index');
});


Route::post('contact', [ContactFormController::class, 'submit'])->name('contact.submit');
