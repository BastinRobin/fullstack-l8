<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get("/", [TaskController::class, "get_home"]);
Route::get("/token", [TaskController::class, "get_token"]);
Route::get("/todos", [TaskController::class, "get_todos"]);
Route::get("/todos/{id}", [TaskController::class, "get_todo"]);
Route::post("/todos", [TaskController::class, "post_todo"]);
Route::put("/todos/{id}", [TaskController::class, "update_todo"]);
Route::delete("/todos/{id}", [TaskController::class, "delete_todo"]);


