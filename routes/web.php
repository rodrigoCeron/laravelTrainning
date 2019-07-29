<?php



Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');

Route::get('/portfolio','ProjectController@index')->name('projects.index');
Route::get('portfolio/create','ProjectController@create')->name('projects.create');
Route::post('/portfolio','ProjectController@store')->name('projects.store');
Route::get('portfolio/{project}','ProjectController@show')->name('projects.show');


Route::view('/contact','contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store');
