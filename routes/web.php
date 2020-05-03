<?php

use Illuminate\Support\Facades\Route;



Route::get('/clubs/all', 'ClubController@index');  # returns all clubs name and id
Route::get('/clubs/{id}', 'ClubController@show_detail');  # return club details by id
Route::get('/club_create/{name}/{desc}/{members}/{lead}/{sublead}', 'ClubController@create');


Route::get('/events/all', 'EventController@index');
Route::get('/event_create/{title}/{desc}/{when}/{location}/{orgtype}/{orgid}', 'EventController@create');


Route::get('/projects/all', 'ProjectController@index');
#Route::get('/event_create/{title}/{desc}/{when}/{location}/{orgtype}/{orgid}', 'ProjectController@create');


Route::get('/startups/all', 'StartupController@index');


#Route::get('/club/all', 'ClubController@index');
#Route::get('/club/all', 'ClubController@index');
