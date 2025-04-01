<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $dati="Siamo nella home";
    return view('home', compact("dati"));
})->name("home");

Route::get('/features', function () {
    $dati="Siamo nella features";
    return view('home', compact("dati"));
})->name("features");


Route::get('/pricing', function () {
    $dati="Siamo nella pricing";
    return view('home', compact("dati"));
})->name("pricing");;
