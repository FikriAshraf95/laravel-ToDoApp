<?php

use Illuminate\Support\Facades\Route;
use App\Models\todo_list;
use App\Http\Controllers\TodoListController;

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

// Route::get('/', 'App\Http\Controllers\TodoListController@index');    
Route::get('/', [TodoListController::class,'index']);
Route::get('/create', [TodoListController::class,'create']);
Route::get('/save_new_list', [TodoListController::class,'store']);
Route::get('/delete/{id}', [TodoListController::class,'destroy']);
Route::get('/edit/{id}', [TodoListController::class,'edit']);
Route::get('/update_list/{id}', [TodoListController::class,'update']);

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('view_list')->with('todo_arr', todo_list::all());
// });