<?php

use App\Http\Controllers\Inventory\CategoryController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    //URL:/inventory/.category=list
    //URL:/inventory/category/add
    //URL:/inventory/category/edit

    Route::get("/inventory/category/add",[CategoryController::class , 'Add'])->name("inventory.category.add");
    Route::post("/inventory/category/add-post",[CategoryController::class,'Addpost']);
    Route::get("/inventory/category/",[CategoryController::class,'index']);
    Route::get("/inventory/category/edit",[categoryController::class,'Edit']);
    Route::post("/inventory/category/edit-post",[CategoryController::class,'Editpost']);
    Route::get("/inventory/category/delete",[CategoryController::class, "Delete"]);
});
require __DIR__.'/auth.php';
