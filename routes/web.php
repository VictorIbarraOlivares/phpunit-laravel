<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return 'hola soy about';
});

Route::view('profile', 'profile');
Route::post('profiles', function(Request $request) {
    $request->file('photo')->store('profiles');
    return redirect('profile');
});