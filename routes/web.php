<?php

use Illuminate\Support\Facades\Route;

// get route example
Route::get('/', function () {
    return view('home');
});

// parameters using routes
Route::get('/portfolio/{firstName}/{lastName}', function ($firstName, $lastName) {
    return $firstName." ".$lastName;
});

// named routes
Route::get('/test', function () {
    return "WELCOME TO TEST PAGE PAPERS PLEASE";
})->name("testPage");

// grouped routes
Route::get('/company/department', function () {
    return "WELCOME TO TEST PAGE PAPERS PLEASE";
});

