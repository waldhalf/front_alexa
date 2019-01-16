<?php

/* Gestion Auth */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/* Landing Page */
Route::get('/', function () {
    return view('index');
});

/* CRUD pour les speeches Alexa ADMIN */
Route::get('/skills', 'SkillController@index')->name('skills.index')->middleware('is_admin');
Route::get('/skills/create', 'SkillController@create')->name('skill.create')->middleware('is_admin');
Route::post('/skills/create', 'SkillController@store')->name('skill.store')->middleware('is_admin');
Route::get('/skills/{id}/edit', 'SkillController@edit')->name('skill.edit')->middleware('is_admin');
Route::post('/skills/{id}/edit', 'SkillController@update')->name('skill.update')->middleware('is_admin');
Route::get('/skills/{id}/delete', 'SkillController@destroy')->name('skill.destroy')->middleware('is_admin');

/* CRUD pour les skills Alexa ADMIN */
Route::get('/skills_set', 'SkillSetController@index')->name('skills_set.index')->middleware('is_admin');
Route::get('/skills_set/create', 'SkillSetController@create')->name('skills_set.create')->middleware('is_admin');
Route::post('/skills_set/create', 'SkillSetController@store')->name('skills_set.store')->middleware('is_admin');
Route::get('/skills_set/{id}/edit', 'SkillSetController@edit')->name('skills_set.edit')->middleware('is_admin');
Route::post('/skills_set/{id}/edit', 'SkillSetController@update')->name('skills_set.update')->middleware('is_admin');
Route::get('/skills_set/{id}/delete', 'SkillSetController@destroy')->name('skills_set.destroy')->middleware('is_admin');
Route::get('/skills_set/{id}/default', 'SkillSetController@default')->name('skills_set.default')->middleware('is_admin');
Route::post('/skills_set/{id}/default', 'SkillSetController@defaultStore')->name('skills_set.default_store')->middleware('is_admin');

/* Redirection non admin */
Route::get('/forbidden', function () {
    return view('forbidden_access');
});

/* Partie API*/
Route::get('/api/presentation_auto', 'apiController@presentation');
