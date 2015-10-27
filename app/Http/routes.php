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

/* Route:: get('what url prefix', function(){
	return view('What view file or output');
})*/
/* Example of view file (news.list)*/
Route::get('/', function () {
    return view('welcome');
});
/*Using a master blade template
1. Create a master blade template under views/layouts
2. Create a controller for layout under app/Http/Controllers
3. Route to the controller
4. Add class in the controller for the child layout 
5. Create a child layout that uses the master under /view
6. Refer to child.blade
*/
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
Route::get('/news','NewsController@home');
Route::get('/news/json','NewsController@getJSON');


Route::get('/blade','MasterLayout@index');
Route::get('/employee','Employee@show');
Route::get('/employee/create','Employee@create');


// Route::get('/',[
// 	'as'	=>	'home',
// 	'uses'	=>	'PagesController@home'
// 	]);
// Route::resource('tasks', 'TaskController');

Route::get('/projects', 'ProjectController@index');