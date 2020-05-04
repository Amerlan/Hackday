<?php

use Illuminate\Support\Facades\Route;



Route::get('/clubs/all', 'ClubController@index');  # returns all clubs name and id
Route::get('/clubs/{id}', 'ClubController@show_detail');  # return club details by id
Route::get('/club_create/{name}/{desc}/{members}/{lead}/{sublead}', 'ClubController@create');


Route::get('/events/all', 'EventController@index');
Route::get('/events/last/{amount}', 'EventController@last');
Route::get('/event_create/{title}/{desc}/{when}/{location}/{orgtype}/{orgid}', 'EventController@create');
Route::get('/events/{id}', 'EventController@show_detail');
Route::get('/events/search/{orgtype}', 'EventController@search');
Route::get('/events/search/{orgtype}/{id}', 'EventController@search_all');

Route::get('/projects/all', 'ProjectController@index');
Route::get('/project_create/{name}/{subject}/{description}', 'ProjectController@create');
Route::get('/projects/{id}', 'ProjectController@show_detail');

Route::get('/startups/all', 'StartupController@index');
Route::get('/startup_create/{name}/{description}/{members}/{founder}/{subject}/{capitalization}', 'StartupController@create');
Route::get('/startups/{id}', 'StartupController@show_detail');

Route::get('/conferences/all', 'ConferenceController@index');
Route::get('/conference_create/{title}/{description}/{image}/{date}/{location}', 'ConferenceController@create');
Route::get('/conferences/{id}', 'ConferenceController@show_detail');

Route::get('/','EventController@home');
Route::get('home','EventController@home');
Route::get('organizations','ClubController@all');
Route::get('conferences','ConferenceController@home');
Route::get('projects','ProjectController@home');
Route::get('startups', 'StartupController@home');
Route::get('/test','SearchController@index');
