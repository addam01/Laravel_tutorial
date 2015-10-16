<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello',function(){
	return "Hello World";
});
Route::get('/hello/{name?}',function($name=null){
	return 'Hello' . $name;
});

Route::get('/student/{i}',function($i){
	$students = ['Addam','Kat','Derp'];
	return $students[$i];
});
Route::get('/students/json',function(){
	$students = ['Addam','Kat','Derp'];
	return response()->json($students);
});

// 2-D JSON
Route::get('/students/2Djson',function(){
	$students = [
		'Status:'=>'ok',
		'list'=>['Addam','Kat','Derp']
		];
	return response()->json($students);
});

// Grouping pages 
Route::group(['prefix'=>'admin'],function(){
	Route::get('/hello/{name?}',function($name=null){
	return 'Hello' . $name;
	});
	Route::get('/students/json',function(){
	$students = ['Addam','Kat','Derp'];
	return response()->json($students);
	});
});

//Routing to controller
Route::get('/news','NewsController@index');