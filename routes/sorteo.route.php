<?php
Route::group(['middleware'=>'auth'], function() {
	Route::get('base-preguntas','BasePreguntasController@base')->name('sorteo.base.index');
	Route::post('base-preguntas','BasePreguntasController@store')->name('sorteo.base.store');
	Route::get('genera-preguntas','BasePreguntasController@genera')->name('sorteo.base.genera');
	Route::get('delete-pregunta/{pregunta}','BasePreguntasController@delete')->name('sorteo.base.delete');

	Route::get('estructura','EstructuraSorteoController@estructura')->name('sorteo.estructura.index');
	Route::post('estructura','EstructuraSorteoController@store')->name('sorteo.estructura.store');
	Route::get('delete-estructura/{estructura}','EstructuraSorteoController@delete')->name('sorteo.estructura.delete');

	Route::get('sorteo','SorteoController@index')->name('sorteo.index');
	Route::get('sortear','SorteoController@sortear')->name('sorteo.sortear');
	Route::get('sorteado','SorteoController@sorteado')->name('preguntas.sorteadas');
	Route::get('imprimir','SorteoController@imprimir')->name('preguntas.imprimir');
	Route::get('pdf','SorteoController@getpdf')->name('preguntas.pdf');


});


