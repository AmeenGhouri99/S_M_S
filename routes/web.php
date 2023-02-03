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


Route::get('/pages/widgets', function () {
    return view('dashboard.pages/widgets');
});
Route::get('/logout', function(){
     session()->forget('login');
    return redirect('/login');
});
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('editor/home', [App\Http\Controllers\HomeController::class, 'editorHome'])->middleware('user_role');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome']);
Route::get('user/home', [App\Http\Controllers\HomeController::class, 'userHome'])->middleware('user_role');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
