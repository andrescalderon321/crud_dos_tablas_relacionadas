<?php
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Models\Categorias;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


        Route::resource('categorias', CategoriaController::class );
        Route::resource('productos',ProductoController::class );




