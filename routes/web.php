<?php

use Illuminate\Support\Facades\Route;



Route::get('/club/get', 'ClubController@index');
Route::DELETE('/delete/{id}', 'ClubController@delete');
