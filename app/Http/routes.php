<?php
Route::get('users/json-list', 'UserController@jsonList');
Route::resource('users','UserController');
Route::get('/', function(){
	return redirect('users');
});
