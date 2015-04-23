<?php

Route::get('/', 'ProjectController@getIndex');
Route::get('/people', 'ProjectController@getPeople');
Route::post('/people', 'ProjectController@postPeople');
Route::get('/text','ProjectController@getText');
Route::post('/text', 'ProjectController@postText');



?>

 