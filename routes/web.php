<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ExtracurricularController;

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
})->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticating'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/students', [StudentController::class, 'index'])->middleware('auth');
Route::get('/student/{id}', [StudentController::class, 'show'])->middleware(['auth','only-admin-teacher']);
Route::get('/student-tambah', [StudentController::class, 'create'])->middleware(['auth','only-admin-teacher']);
Route::post('/student', [StudentController::class, 'store'])->middleware(['auth','only-admin-teacher']);
Route::get('/student-edit/{id}', [StudentController::class, 'edit'])->middleware(['auth','only-admin-teacher']);
Route::put('/student/{id}', [StudentController::class, 'update'])->middleware(['auth','only-admin-teacher']);
Route::get('/student-delete/{id}', [StudentController::class, 'delete'])->middleware(['auth','only-admin']);
Route::delete('/student-hapus/{id}', [StudentController::class, 'destroy'])->middleware(['auth','only-admin']);
Route::get('/student-terhapus', [StudentController::class, 'deletedStudent'])->middleware(['auth','only-admin']);
Route::get('/student/{id}/restore', [StudentController::class, 'restore'])->middleware(['auth','only-admin']);



Route::get('/class', [ClassController::class, 'index'])->middleware('auth');
Route::get('/class-detail/{id}', [ClassController::class, 'show'])->middleware('auth');

Route::get('/extracurricular', [ExtracurricularController::class, 'index'])->middleware('auth')->middleware('auth');
Route::get('/eskul-detail/{id}', [ExtracurricularController::class, 'show'])->middleware('auth');

Route::get('/teacher', [TeacherController::class, 'index'])->middleware('auth')->middleware('auth');
Route::get('/teacher-detail/{id}', [TeacherController::class, 'show'])->middleware('auth');




























//MATERI ROUTING HARI PERTAMA
// Basic Routing
// Route::get('/home', function () {
//     return 'ini halaman home';
// });

// View Routes1
// Route::view('/contact', 'contact', ['name' => 'haikal', 'phone' => '08123456789']);
// Route::get('/contact', function () {
//     return view('contact', ['name' => 'haikal', 'phone' => '08123456789']);
// });

//Redirect Routes
// Route::redirect('/contact', '/contact-us');

//Route Parameters
// Route::get('/product', function () {
//     return 'ini adalah product';
// });
// Route::get('/product/{id}', function ($id) {
//     return view('product.detail', ['id' => $id]);
// });

//Route Prefixes
// Route::prefix('admin')->group(function () {
//         Route::get('/profile-admin', function () {
//             return 'ini adalah halaman profile admin';
//         });
//         Route::get('/contact-admin', function () {
//             return 'ini adalah halaman contact admin';
//         });
//         Route::get('/about-admin', function (){
//             return 'ini adalah halaman about admin';
//         });
//     });

// Route::get($uri, $callback); -> unuk mendapatkan data ke database
// Route::post($uri, $callback); -> untuk menambah data ke database
// Route::put($uri, $callback); -> untuk mengubah/update data dari database
// Route::patch($uri, $callback); -> untuk mengubah/update data dari database
// Route::delete($uri, $callback); -> untuk menghapus data dari database