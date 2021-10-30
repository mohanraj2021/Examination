<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Student\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['middleware'=>'auth'],function(){

    Route::group(['prefix'=>'admin','middleware'=>'is_admin','as'=>'admin.'],function(){

        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
        Route::get('/exam',[AdminController::class, 'exam'])->name('exam');
        Route::post('/add_question',[AdminController::class, 'add_question'])->name('add_question');
    });


    Route::group(['prefix'=>'student','as'=>'student.'],function(){
        Route::get('/home', [StudentController::class, 'index'])->name('home');
        Route::get('/exam_portal', [StudentController::class, 'exam_portal'])->name('exam_portal');
        Route::post('/success',[StudentController::class, 'success'])->name('success');

    });

});