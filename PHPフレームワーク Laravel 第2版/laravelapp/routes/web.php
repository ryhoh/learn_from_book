<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('hello', function () {
//     return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
// });

// Route::get('hello/{msg?}', function ($msg='no message.') {
//     $html = <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
//     body {font-size:16pt; color:#999; }
//     h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
// </style>
// </head>
// <body>
//     <h1>Hello</h1>
//     <p>{$msg}</p>
//     <p>これは、サンプルで作ったページです。</p>
// </body>
// </html>
// EOF;
//     return $html;
// });

// Route::get('hello', 'App\Http\Controllers\HelloController@index');
// Route::get('hello/{id?}/{pass?}', 'App\Http\Controllers\HelloController@index');

// Route::Get('hello', 'App\Http\Controllers\HelloController@index');
// Route::Get('hello/other', 'App\Http\Controllers\HelloController@other');

// Route::get('hello', 'App\Http\Controllers\Hellocontroller');
// Route::get('hello', 'App\Http\Controllers\Hellocontroller@index');

// Route::get('hello', function() {
//     return view('hello.index');
// });

Route::get('hello', 'App\Http\Controllers\HelloController@index');
Route::post('hello', 'App\Http\Controllers\HelloController@post');
