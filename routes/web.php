<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/files');
});

Auth::routes(['register' => false]);

Route::get('/admin/dashboard', 'Admin\AdminController@dashboard');
// Route::resource('/admin/user', 'Admin\UserController');

Route::get('/{any}', 'HomeController@vueroute')->where('any', '.*');

// Route::post('/file/upload','File\FileController@uploadFile');