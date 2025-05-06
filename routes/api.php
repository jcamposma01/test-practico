<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/productos',[Productocontroller::class,'index']);

Route::post('/productos',[Productocontroller::class,'insert']);
