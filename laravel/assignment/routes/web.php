<?php

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

Route::get('/', [StudentController::class, 'showStudentList'])->name('studentList');

Route::get('/students/add', [StudentController::class, 'showStudentForm'])->name('addStudent.get');

Route::post('/students/add', [StudentController::class, 'submitStudentForm'])->name('addStudent.post');

Route::get('/student/edit/{id}', [StudentController::class, 'showStudentEditForm'])->name('edit.student.get');

Route::post('/student/edit/{id}', [StudentController::class, 'submitStudentEditForm'])->name('edit.student.post');

Route::get('/student/delete/{id}', [StudentController::class, 'deleteStudent'])->name('delete.student');

Route::get('/student/export', [StudentController::class, 'export'])->name('student.export');

Route::get('/student/import/', [StudentController::class, 'showImportForm'])->name('student.import.get');

Route::post('/student/import/', [StudentController::class, 'import'])->name('student.import.post');

Route::get('/student/search', [StudentController::class, 'showSearchForm'])->name('search.get');

Route::post('/student/search', [StudentController::class, 'submitSearchForm'])->name('search.post');
