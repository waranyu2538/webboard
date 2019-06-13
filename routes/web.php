<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/



/*Route::get('show1','Controller1@show1');*/

Route::get('user/group',function(){
	 return view('user/group');
});

	Route::get('user/group/tp_programer', function () {
			return view('user/topic/tp_programer');
	});

		Route::get('user/group/tp_programer/clanguage', function () {
				return view('user/topic/viewtopic/clanguage');
		});

Route::get('user/group2',function(){
	 return view('user/group2');
});


/*Route::get('group', function () {
    return redirect('user/group');
});*/

/*
Route::get('/header',function(){
	 return view('header');
});

Route::get('/adddata',function(){
	 return view('adddata');
});*/

Route::resource('user','UsersController');
