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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/abc', function () {
    return view('test');
});

//Route::get('/login', 'LoginController@index');
Route::get('/login', ['as'=>'login.index','uses'=>'LoginController@index']);
Route::post('/login', ['uses'=>'LoginController@verify']);


 Route::group(['middleware'=>['sess']], function(){

	Route::get('/home', 'HomeController@index')->name('home.index');

	Route::get('/home/page', 'HomeController@foodBlog')->name('home.page');

	Route::get('/home/member', 'HomeController@showMember')->name('home.member');
	Route::get('/home/member_item/{rname}', 'HomeController@showResItem')->name('home.member_item');
	

	Route::get('/home/userlist', 'HomeController@showUser')->name('home.userlist');
	Route::get('/home/edit/{uid}', 'HomeController@editUser')->name('home.edit');
	Route::post('/home/edit/{uid}', 'HomeController@updateUser');
	Route::get('/home/details', 'HomeController@details')->name('home.details');
	// Route::get('/home/search', 'HomeController@viewsearch')->name('home.search');
	// Route::post('/home/details', 'HomeController@search');
	Route::get('/home/add', 'HomeController@addUser')->name('home.add');
	Route::post('/home/add', 'HomeController@createUser');
	Route::get('/home/delete/{id}', 'HomeController@deleteUser')->name('home.delete');
	Route::post('/home/delete/{id}', 'HomeController@destroyUser');	

	// Route::group(['middleware'=>['type']], function(){
		
    Route::get('/home/add_restuarant', 'HomeController@addRestuarant')->name('home.add_restuarant');
	Route::post('/home/add_restuarant', 'HomeController@createRestuarant');
	Route::get('/home/restuarant', 'HomeController@showRestuarant')->name('home.restuarantlist');
	Route::get('/home/edit_restuarant/{rid}', 'HomeController@editRestuarant')->name('home.edit_restuarant');
	Route::post('/home/edit_restuarant/{rid}', 'HomeController@updateRestuarant');
	Route::get('/home/delete_restuarant/{id}', 'HomeController@deleteRestuarant')->name('home.delete_restuarant');
	Route::post('/home/delete_restuarant/{id}', 'HomeController@destroyRestuarant');

	Route::get('/home/add_item', 'HomeController@addItem')->name('home.add_item');
	Route::post('/home/add_item', 'HomeController@createItem');	
	Route::get('/home/item', 'HomeController@showItem')->name('home.itemlist');
	Route::get('/home/edit_item/{mid}', 'HomeController@editItem')->name('home.edit_item');
	Route::post('/home/edit_item/{mid}', 'HomeController@updateItem');
	Route::get('/home/delete_item/{mid}', 'HomeController@deleteItem')->name('home.delete_item');
	Route::post('/home/delete_item/{mid}', 'HomeController@destroyItem');
	
	Route::get('/home/search_restuarant', 'HomeController@searchRestuarant')->name('home.search_restuarant');
	
    Route::post('/home/search_restuarant', 'HomeController@searchRestuarant');



	

	
	// });
 });





Route::get('/logout', 'logoutController@index');

//Route::resource('accounts', 'AccountController');



