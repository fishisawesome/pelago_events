<?php
Route::get('users/json-list', 'UserController@jsonList');
Route::resource('users','UserController');

Route::post('csrf', function(){
	return csrf_token();
});

Route::get('/', function(){
	return redirect('users');
});
