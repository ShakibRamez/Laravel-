<?php

use Illuminate\Support\Facades\Route;
// use App\Https\Controller\DashboardController;
// use App\Https\Controller\ProfileController;
use App\Http\Controllers\FormController;

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

// Route::get('/', [DashboardController::class , 'index']);
// Route::get('/profile', [ProfileController::class , 'index']);

// Route::get('/new', function(){
//     return view('new.index');
// });

Route::get('/form', [FormController::class, 'showForm']);
Route::post('/form', [FormController::class, 'submitForm']);
