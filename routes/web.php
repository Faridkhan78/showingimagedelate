<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('viewimages');
});

Route::get('/register', function () {
    return view('register');
})->name('register');


Route::post('image',[UserController::class,'uploadImages'])->name('images');

// Route::get('/viewimages', function () {
//     return view('viewimages');
// });

Route::get('deleteUser/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');
Route::get('viewimages',[UserController::class,'viewImages'])->name('viewimages');



Route::post('/updatepost',[UserController::class,'updatePage'])->name('updatePost');

// delete image from model
Route::delete('/delete-image/{id}', [UserController::class, 'deleteImage'])->name('image.delete');
