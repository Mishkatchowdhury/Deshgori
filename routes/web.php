<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('home');
});

Route::get('/teacher-registration', function () {
    return view('teacher_registration');
});
Route::get('/dhanmondi-area', function () {
    return view('dhanmondi_area');
});

Route::post('/register-teacher', [HomeController::class, 'saveTeacher']);
//Route::get('/register-teacher', 'UserController@index');

//Route::post('/register-teacher', 'HomeController@saveTeacher');