<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

Route::get("/", [ContactController::class, 'index']);

Route::post("/login", [UserController::class, 'login']);
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});

Route::get("contacts/new", function () {
    return view('create');
});
Route::post("contacts/create", [ContactController::class, 'create']);
Route::get("contacts/edit/{id}", [ContactController::class, 'edit']);
Route::post("contacts/update/{id}", [ContactController::class, 'update'])->name('contacts.update');
Route::delete('contacts/{id}', [ContactController::class, 'delete'])->name('contacts.delete');
