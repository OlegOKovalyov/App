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

//Route::get('hello', function () {
//    return 'Hello world!';
//});

//Route::get('hello', function () {
//    return view('hello');
//});

//Route::get('hello', function () {
//    return view('hello', [
//        'name' => 'Alex'
//    ]);
//});

//Route::get('hello', function () {
//    return view('hello')->with('name', 'John');
//});

Route::get('hello', function () {
    $name = 'Alex';
    return view('hello', [
        'name' => $name
    ]);
});

//Route::get('hello', function () {
//    $name = 'Alexey';
//    return view('hello', compact('name'));
//});

Route::get('hello', function () {
    $tasks = [
        'add task',
        'find task',
        'review task'
    ];
    return view('hello', compact('tasks'));
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function() {
//     Route::get('/', 'DashboardController@dashboard')->name('admin.index');
// });

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function() {
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    // Мы добавили префикс ['as'=>'admin'], чтобы этот маршрут не переплетался с
    // другими маршрутами
});