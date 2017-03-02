<?php

Route::get('/', [
 'uses' => 'HomeController@index',
 'as' => 'home.index'
]);

Route::get('cleandatabase','HomeController@clean')->name('clean.database');

