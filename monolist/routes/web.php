<?php

Route::get('/', 'WelcomeController@index');

Route::get('/', function () {
    return view('welcome');
});
