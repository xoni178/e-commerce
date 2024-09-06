<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;


use Illuminate\Support\Facades\Route;

Route::controller(ProductController::class)->group(function () {
    Route::get('/', "index");

    //product filtering
    Route::get("/computers", "computersPage");

    Route::get("/laptops",  "laptopsPage");

    Route::get("/monitors", "monitorsPage");

    Route::get("/phones", "phonesPage");

    //CRUD Pages
    Route::get('/create', "create");

    Route::get('/product/{id}', "productPage");

    Route::get('/product/{id}/edit', "edit");

    //CRUD
    Route::post('/', "store");

    Route::patch('/product/{id}', "update");

    Route::delete('/product/{id}',  "delete");
});

Route::controller(UserController::class)->group(function () {
    Route::get('/register', "create");
    Route::post('/register', "store");
});

Route::controller(SessionController::class)->group(function () {
    Route::get('/login', "create");
    Route::post('/login', "store");
    Route::post('/logout', "destroy");
});
