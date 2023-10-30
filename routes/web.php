<?php

use Illuminate\Support\Facades\Route;
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
    return view('home',[
    'name' => 'Haikal', 
    'role' => 'admin',
    'buah' => ['apel', 'jeruk', 'mangga'],
    ]);
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/student/{id}', [StudentController::class, 'show']);
Route::get('/student-tambah', [StudentController::class, 'create']);
Route::post('/student', [StudentController::class, 'store']);
Route::get('/student-edit/{id}', [StudentController::class, 'edit']);
Route::put('/student/{id}', [StudentController::class, 'update']);
Route::get('/student-delete/{id}', [StudentController::class, 'delete']);
Route::delete('/student-hapus/{id}', [StudentController::class, 'destroy']);
Route::get('/student-terhapus', [StudentController::class, 'deletedStudent']);
Route::get('/student/{id}/restore', [StudentController::class, 'restore']);



Route::get('/class', [ClassController::class, 'index']);
Route::get('/class-detail/{id}', [ClassController::class, 'show']);

Route::get('/extracurricular', [ExtracurricularController::class, 'index']);
Route::get('/eskul-detail/{id}', [ExtracurricularController::class, 'show']);

Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/teacher-detail/{id}', [TeacherController::class, 'show']);




























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