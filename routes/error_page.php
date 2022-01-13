<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as c;
use App\Http\Controllers\Controller;
use Laravel\Jetstream\Role as JetstreamRole;
use Laravel\Jetstream\Rules\Role;

Route::get('/404', function () {
    abort(404);
});
Route::get('/403', function () {
    abort(403);
});
Route::get('/500', function () {
    abort(500);
});
