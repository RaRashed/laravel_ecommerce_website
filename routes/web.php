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
//products routes







Route::get('/','frontend\PagesController@index')->name('index');





Route::get('/contact','frontend\PagesController@contact')->name('contact');
Route::get('/about','frontend\PagesController@about')->name('about');



Route::post('/store','frontend\PagesController@store')->name('frontend.contacts.store');












Route::get('/products','frontend\ProductsController@index')->name('products');

Route::get('/products','frontend\ProductsController@index')->name('products');
Route::get('/products/{slug}','frontend\ProductsController@show')->name('products.show');
Route::get('/search','frontend\PagesController@search')->name('search');








Route::group(['prefix' => '/products'], function(){

Route::get('/','frontend\ProductsController@index')->name('products');
Route::get('/{slug}','frontend\ProductsController@show')->name('products.show');
Route::get('/new/search','frontend\PagesController@search')->name('search');

//category route
Route::get('/categories','frontend\CategoriesController@index')->name('categories.index');
Route::get('/category/{id}','frontend\CategoriesController@show')->name('categories.show');

});


//admin routes

Route::group(['prefix' => '/admin'], function(){
	Route::get('/','backend\PagesController@index')->name('backend.index');

//product routes

Route::group(['prefix' => '/products'], function(){



	
	Route::get('/','backend\ProductsController@index')->name('backend.products');

	Route::get('/create','backend\ProductsController@create')->name('backend.product.create');

	
	Route::post('/store','backend\ProductsController@store')->name('backend.product.store');
	Route::get('/edit/{id}','backend\ProductsController@edit')->name('backend.product.edit');

	Route::post('/product/edit/{id}','backend\ProductsController@update')->name('backend.product.update');
	Route::get('/product/delete/{id}','backend\ProductsController@delete')->name('backend.product.delete');

});



//contacts route

Route::group(['prefix' => '/contacts'], function(){



	
	Route::get('/','backend\ContactsController@index')->name('backend.contacts');

	Route::get('/contact/delete/{id}','backend\ContactsController@delete')->name('backend.contact.delete');

});


});


//Categories routes

Route::group(['prefix' => '/categories'], function(){



	Route::get('/','backend\CategoriesController@index')->name('backend.categories');

	Route::get('/create','backend\CategoriesController@create')->name('backend.category.create');

	Route::get('/edit/{id}','backend\CategoriesController@edit')->name('backend.category.edit');
	Route::post('/store','backend\CategoriesController@store')->name('backend.category.store');

	Route::post('/product/edit/{id}','backend\CategoriesController@update')->name('backend.category.update');
	Route::get('/product/delete/{id}','backend\CategoriesController@delete')->name('backend.category.delete');


});
//brands routes

Route::group(['prefix' => '/brands'], function(){



	Route::get('/','backend\BrandsController@index')->name('backend.brands');

	Route::get('/create','backend\BrandsController@create')->name('backend.brand.create');

	Route::get('/edit/{id}','backend\BrandsController@edit')->name('backend.brand.edit');
	Route::post('/store','backend\BrandsController@store')->name('backend.brand.store');

	Route::post('/product/edit/{id}','backend\BrandsController@update')->name('backend.brand.update');
	Route::get('/product/delete/{id}','backend\BrandsController@delete')->name('backend.brand.delete');


});

//Divisions routes

Route::group(['prefix' => '/divisions'], function(){



	Route::get('/','backend\DivisionsController@index')->name('backend.divisions');

	Route::get('/create','backend\DivisionsController@create')->name('backend.division.create');

	Route::get('/edit/{id}','backend\DivisionsController@edit')->name('backend.division.edit');
	Route::post('/store','backend\DivisionsController@store')->name('backend.division.store');

	Route::post('/product/edit/{id}','backend\DivisionsController@update')->name('backend.division.update');
	Route::get('/product/delete/{id}','backend\DivisionsController@delete')->name('backend.division.delete');


});
//District routes

Route::group(['prefix' => '/districts'], function(){



	Route::get('/','backend\DistrictsController@index')->name('backend.districts');

	Route::get('/create','backend\DistrictsController@create')->name('backend.district.create');

	Route::get('/edit/{id}','backend\DistrictsController@edit')->name('backend.district.edit');
	Route::post('/store','backend\DistrictsController@store')->name('backend.district.store');

	Route::post('/product/edit/{id}','backend\DistrictsController@update')->name('backend.district.update');
	Route::get('/product/delete/{id}','backend\DistrictsController@delete')->name('backend.district.delete');


});



//carts route


Route::group(['prefix' => '/carts'], function(){

Route::get('/','frontend\CartsController@index')->name('carts');

Route::post('/store','frontend\CartsController@store')->name('carts.store');
Route::post('/update/{id}','frontend\CartsController@update')->name('carts.update');
Route::get('/delete/{id}','frontend\CartsController@destroy')->name('carts.delete');

});
//carts route


Route::group(['prefix' => '/checkout'], function(){

Route::get('/','frontend\CheckoutsController@index')->name('checkouts');

Route::post('/store','frontend\CheckoutsController@store')->name('checkouts.store');


});

//Order routes


Route::group(['prefix' => '/orders'], function(){



	Route::get('/','backend\OrdersController@index')->name('backend.orders');

	Route::get('/view/{id}','backend\OrdersController@show')->name('backend.orders.show');
	Route::get('/delete/{id}','backend\OrdersController@delete')->name('backend.order.delete');

	Route::get('/completed/{id}','backend\OrdersController@completed')->name('backend.order.completed');
	Route::get('/paid/{id}','backend\OrdersController@paid')->name('backend.order.paid');
		Route::post('/charge_update/{id}','backend\OrdersController@chargeUpdate')->name('backend.order.charge');
			Route::get('/invoice/{id}','backend\OrdersController@generateInvoice')->name('backend.order.invoice'); 



});

//payment routes


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
