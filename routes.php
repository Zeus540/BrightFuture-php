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
    return view('index');
});

Route::get('/forgotpassword', 'Auth\RegistrationController@showRegister');
Route::post('/registration', 'Auth\RegistrationController@requestRegister');

//Route::group(['middleware' => ['web', 'jwt.admin']], function() {

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {

  Route::get('/login', 'Auth\JWTAuthController@getLogin');
  Route::post('/login', 'Auth\JWTAuthController@validateLogin', ['middleware' => ['web']]);

  Route::group(['middleware' => ['web', 'jwt.admin']], function() {

    Route::get('/', 'Admin\UsersController@index');

    Route::group(['prefix' => 'users'], function() {
      Route::get('/', 'Admin\UsersController@index');
      Route::get('/get', 'Admin\UsersController@getUsers');
      Route::get('/create', 'Admin\UsersController@create');
      Route::put('/create', 'Admin\UsersController@insert');
      Route::get('/{userId}', 'Admin\UsersController@show');
      Route::delete('/{userId}', 'Admin\UsersController@delete');
      Route::get('/{userId}/get', 'Admin\UsersController@getUser');
      Route::get('/{userId}/edit', 'Admin\UsersController@edit');
      Route::post('/{userId}/edit', 'Admin\UsersController@update');
      Route::get('/{userId}/resend', 'Admin\UsersController@resendInvite');
    });

    Route::group(['prefix' => 'maplocations'], function() {
      Route::get('/', 'Admin\MaplocationsController@index');
      Route::get('/get', 'Admin\MaplocationsController@getMaplocations');
      Route::get('/create', 'Admin\MaplocationsController@create');
      Route::put('/create', 'Admin\MaplocationsController@insert');
      Route::get('/{maplocationId}', 'Admin\MaplocationsController@show');
      Route::delete('/{maplocationId}', 'Admin\MaplocationsController@delete');
      Route::get('/{maplocationId}/get', 'Admin\MaplocationsController@getUser');
      Route::get('/{maplocationId}/edit', 'Admin\MaplocationsController@edit');
      Route::post('/{maplocationId}/edit', 'Admin\MaplocationsController@update');
    });

    Route::group(['prefix' => 'faqs'], function() {
      Route::get('/', 'Admin\FaqsController@index');
      Route::get('/get', 'Admin\FaqsController@getFaqs');
      Route::get('/create', 'Admin\FaqsController@create');
      Route::put('/create', 'Admin\FaqsController@insert');
      Route::get('/{faqId}', 'Admin\FaqsController@show');
      Route::delete('/{faqId}', 'Admin\FaqsController@delete');
      Route::get('/{faqId}/get', 'Admin\FaqsController@getUser');
      Route::get('/{faqId}/edit', 'Admin\FaqsController@edit');
      Route::post('/{faqId}/edit', 'Admin\FaqsController@update');
    });


    Route::group(['prefix' => 'brands'], function() {
      Route::get('/', 'Admin\BrandsController@index');
      Route::get('/create', 'Admin\BrandsController@create');
      Route::get('/{brandId}', 'Admin\BrandsController@show');
      Route::get('/{brandId}/edit', 'Admin\BrandsController@edit');
    });

    Route::group(['prefix' => 'assets'], function() {
      Route::get('/', 'Admin\AssetsController@index');
      Route::get('/create', 'Admin\AssetsController@create');
      Route::get('/{assetId}', 'Admin\AssetsController@show');
      Route::get('/{assetId}/edit', 'Admin\AssetsController@edit');
    });

    Route::group(['prefix' => 'categories'], function() {
      Route::get('/', 'Admin\CategoriesController@index');
      Route::get('/get', 'Admin\CategoriesController@getCategories');
      Route::get('/create', 'Admin\CategoriesController@create');
      Route::put('/create', 'Admin\CategoriesController@insert');
      Route::get('/{categoryId}', 'Admin\CategoriesController@show');
      Route::delete('/{categoryId}', 'Admin\CategoriesController@delete');
      Route::get('/{categoryId}/get', 'Admin\CategoriesController@getUser');
      Route::get('/{categoryId}/edit', 'Admin\CategoriesController@edit');
      Route::post('/{categoryId}/edit', 'Admin\CategoriesController@update');
    });

     Route::group(['prefix' => 'posts'], function() {
      Route::get('/', 'Admin\PostsController@index');
      Route::get('/get', 'Admin\PostsController@getPosts');
      Route::get('/create', 'Admin\PostsController@create');
      Route::put('/create', 'Admin\PostsController@insert');
      Route::get('/{postId}', 'Admin\PostsController@show');
      Route::delete('/{postId}', 'Admin\PostsController@delete');
      Route::get('/{postId}/get', 'Admin\PostsController@getUser');
      Route::get('/{postId}/edit', 'Admin\PostsController@edit');
      Route::post('/{postId}/edit', 'Admin\PostsController@update');
    });

     Route::group(['prefix' => 'activities'], function() {
      Route::get('/', 'Admin\ActivitiesController@index');
      Route::get('/get', 'Admin\ActivitiesController@getActivities');
      Route::get('/create', 'Admin\ActivitiesController@create');
      Route::put('/create', 'Admin\ActivitiesController@insert');
      Route::get('/{activitiyId}', 'Admin\ActivitiesController@show');
      Route::delete('/{activitiyId}', 'Admin\ActivitiesController@delete');
      Route::get('/{activitiyId}/get', 'Admin\ActivitiesController@getUser');
      Route::get('/{activitiyId}/edit', 'Admin\ActivitiesController@edit');
      Route::post('/{activitiyId}/edit', 'Admin\ActivitiesController@update');
    });


     Route::get('get-image','ImageController@getImage');
     Route::post('ajax-upload-image', ['as'=>'ajax.upload-image','uses'=>'ImageController@ajaxUploadImage']);

  });

});

Route::group(['prefix' => 'assets'], function() {
  Route::get('/', 'Api\AssetsController@getAssets');
  Route::put('/', 'Api\AssetsController@addAsset');
  Route::get('/{assetId}', 'Api\AssetsController@getAsset');
  Route::post('/{assetId}', 'Api\AssetsController@updateAsset');
  Route::delete('/{assetId}', 'Api\AssetsController@deleteAsset');
});

// Route::group(['prefix' => 'api/v1', 'middleware' => 'api'], function() {


//     Route::group(['prefix' => 'brands'], function() {
//       Route::get('/', 'Api\BrandsController@getBrands');
//       Route::put('/', 'Api\BrandsController@addBrand');
//       Route::get('/{brandId}', 'Api\BrandsController@getBrand');
//       Route::post('/{brandId}', 'Api\BrandsController@updateBrand');
//       Route::delete('/{brandId}', 'Api\BrandsController@deleteBrand');
//     });


// });

Route::get('{any?}', function ($any = null) {
  return view('index');
})->where('any', '.*');
