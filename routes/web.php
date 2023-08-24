<?php
use App\Models\Task;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TaskControler;

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
Route::get('/', [TaskControler::class, 'index']);
 
/**
 * Add A New Task
 */
Route::post('/task', [TaskControler::class, 'store']);
 
/**
 * Delete An Existing Task
 */
Route::delete('/task/{id}', [TaskControler::class, 'destroy']);
// Route::delete('/task/{id}', function ($id) {
//     //
//     Task::findOrFail($id)->delete();
 
//     return redirect('/');
// });
