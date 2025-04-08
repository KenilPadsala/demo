<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SendEmail;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Test;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');


Route::get("users", function (){
    return view('users.list');
});

// Route::get("pics",function(){
//     return view('pics.list');
// });

Route::get("list/products", function (){
    return view('products.list');
})->name('list.products');

Route::get("add/products", function (){
    return view('products.add');
})->name('add.products');

Route::get("update/products", function (){
    return view('products.update');
})->name('update.products');

Route::get("add/users", function (){
    return view('users.add');
})->name('add.users');

Route::get("list/users", function (){
    return view('users.list');
})->name('list.users');

Route::get("update/users", function (){
    return view('users.update');
})->name('update.users');

Route::get('students/add', function () {
    return view('students.add');
})->name('students.add');

Route::get('students/list', function () {
    return view('students.list');
})->name('students.list');

Route::get('students/update', function () {
    return view('students.update');
})->name('students.update');

// Route::get('catagories/add', function () {
//     return view('catagories.add');
// })->name('catagories.add');

// Route::get('catagories/list', function () {
//     return view('catagories.list');
// })->name('catagories.list');

// Route::get('catagories/update', function () {
//     return view('catagories.update');
// })->name('catagories.update');

Route::get('employees/add', function () {
    return view('employees.add');
})->name('employees.create');

Route::get('employees/list', function () {
    return view('employees.list');
})->name('employees.index');

Route::get('employees/update', function () {
    return view('employees.update');
})->name('employees.update');

Route::get("users/list", [UserController::class, 'list']); //single
Route::get("add/user", [UserController::class, 'add']); //single


Route::prefix('admin')->middleware(['auth', 'checkRole:admin'])->group(function () {
    Route::resource('products', ProductController::class);
    Route::resource('categories', CatagoryController::class);
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

});


Route::middleware(['auth', 'checkRole:user'])->group(function () {
    Route::get("home", function () {
        return view("home");
    })->name('home')->middleware('auth');
    
    Route::get("about", function () {
        return view("about");
    })->name('about');
    
    Route::get("contact", function () {
        return view("contact");
    })->name('contact');
    
});

Route::get('test', TestController::class);  //invokable


Route::get("students.list", [StudentController::class, 'list']);
Route::get("add/students", [StudentController::class, 'add']);


Route::get('sendemail', SendEmail::class);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
