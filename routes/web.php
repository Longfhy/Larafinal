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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Route::group(['middleware' => ['auth']], function() {
//     Route::resource('roles','RoleController');
//     Route::resource('users','UserController');
//     Route::resource('products','ProductController');
// });

Route::get('/role', function (\Illuminate\Http\Request $request) {
 
    // $user = $request->user('api');
    $user = Auth::user('api');
    // $user = auth('api')->user();
    dd($user);
 
    dd($user->hasRole('developer'));
    dd($user->givePermissionsTo('create-tasks'));
    dd($user->can('create-tasks'));

});

Route::get('/roles', 'PermissionController@Permission');
//     $user = $request->user();
// dd($user->hasRole('developer')); //will return true, if user has role
// dd($user->givePermissionsTo('create-tasks'));// will return permission, if not null
// dd($user->can('create-tasks')); // will return true, if user has permission
// }

Route::group(['middleware' => 'role:developer'], function() {

    Route::get('/admin', function() {
 
       return 'Welcome Admin';
       
    });
 
 });

