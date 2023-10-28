<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Dashboard"]);
});

Route::get('/data', function () {
    return view('data', [
        "title" => "Data"]);
});

Route::get('/history', function () {
    return view('history', [
        "title" => "Riwayat"]);
});

