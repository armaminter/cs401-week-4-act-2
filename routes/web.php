<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;

Route::get('/', function () {
    return Category::all();
});

// Route::get('/categories', function () {
//     return Category::all();
// });