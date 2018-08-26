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