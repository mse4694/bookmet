<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/primevue', [HomeController::class, 'primevue'])->name('primevue');
Route::get('/primevue/inputgroup', [HomeController::class, 'inputgroup'])->name('inputgroup');
Route::get('/list_reserv_calendar', [HomeController::class, 'list_reserv_calendar'])->name('list_reserv_calendar');