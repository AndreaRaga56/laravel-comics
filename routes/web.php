<?php

use Illuminate\Support\Facades\Route;

Route::get('/comics', function () {
    $nomePagina="Comics";
    // return view('home', ["a" => $ciao, "b"=>1]);
    return view('comics', compact("nomePagina"));
})->name("comics");
