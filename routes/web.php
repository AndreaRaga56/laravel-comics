<?php

use Illuminate\Support\Facades\Route;

Route::get('/comics', function () {
    $nomePagina="Comics";
    // return view('home', ["a" => $ciao, "b"=>1]);
    return view('comics', compact("nomePagina"));
})->name("comics");

Route::get('/movies', function () {
    $nomePagina="Movies";
    // return view('home', ["a" => $ciao, "b"=>1]);
    return view('movies', compact("nomePagina"));
})->name("movies");

