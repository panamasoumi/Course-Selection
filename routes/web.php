<?php

use App\Http\Controllers\CourseController;
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

//Route::group(['prefix'=>'courses', 'middleware'=>['auth']],function(){
  //  Route::get('/',[CourseController::class,'index'])->name('courses.indes');
//});
Route::group(['prefix' => 'courses'], function() {
  Route::get('/', [CourseController::class, 'index'])->name('courses.index');
  Route::get('/create', [CourseController::class, 'create'])->name('courses.create');
  Route::post('/', [CourseController::class, 'store'])->name('courses.store');
  Route::get('courses/{course}', [CourseController::class, 'show'])->name('courses.show');
  Route::get('/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit'); 
  Route::put('courses/{course}', [CourseController::class, 'update'])->name('courses.update');
});