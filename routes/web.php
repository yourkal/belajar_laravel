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
Route::get('/class', [ClassController::class, 'index']);
Route::get('/extracurricular', [ExtracurricularController::class, 'index']);
Route::get('/teacher', [TeacherController::class, 'index']);





























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