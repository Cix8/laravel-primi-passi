<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    $data_array = [
        "name" => "John",
        "lastname" => "Smith",
        "info_array" => [
            "age" => 18,
            "email" => "johnnysmith@smithmail.smt",
            "address" => "Via del Campo, 12"
        ]
    ];
    return view("home", $data_array);
})->name("home");

Route::get("/info", function () {
    $data_array = [
        "name" => "John",
        "lastname" => "Smith",
        "info_array" => [
            "age" => 18,
            "email" => "johnnysmith@smithmail.smt",
            "address" => "Via del Campo, 12"
        ]
    ];
    return view("user_info", $data_array);
})->name("user_info");
