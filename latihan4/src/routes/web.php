<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('home', ['title' => 'Home']);
})->name('home');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');


// Route::get('product', [ProductController::class, 'index'])->name('product');
// Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
// Route::post('product/create', [ProductController::class, 'store'])->name('product.store');
// Route::get('product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
// Route::put('product/update/{product}', [ProductController::class, 'update'])->name('product.update');

Route::get('product', [ProductController::class, 'index'])->name('product');
Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('product/update/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('product/delete/{product}', [ProductController::class, 'destroy'])->name('product.delete');

Route::get('student', [StudentController::class, 'index'])->name('student');
Route::get('student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('student/store', [StudentController::class, 'store'])->name('student.store');
Route::get('student/edit/{student}', [StudentController::class, 'edit'])->name('student.edit');
Route::put('student/update/{student}', [StudentController::class, 'update'])->name('student.update');
Route::delete('student/delete/{student}', [StudentController::class, 'destroy'])->name('student.delete');
