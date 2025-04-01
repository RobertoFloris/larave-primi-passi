<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $dati="dati dinamici";
    return view('home', ["dati" => $dati]);
});
