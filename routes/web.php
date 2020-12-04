<?php

use Illuminate\Support\Facades\Route;

use App\Models\Image;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/insert', function () {
//     return view('homepage');
// });

Route::resource('/', 'App\Http\Controllers\ImagesController');

Route::get('/project', function () {
    return view('project');
});
