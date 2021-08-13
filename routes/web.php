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

// Route สำหรับ Linke Menu
Route::get('/', [HomeController::class, 'index'])->name('initial_page');
Route::get('/booking_room', [HomeController::class, 'booking_room'])->name('booking_room');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
// Route::get('/primevue', [HomeController::class, 'primevue'])->name('primevue');
// Route::get('/primevue/inputgroup', [HomeController::class, 'inputgroup'])->name('inputgroup');
Route::get('/calendar', [HomeController::class, 'calendar'])->name('calendar');
Route::get('/booking_monitor', [HomeController::class, 'booking_monitor'])->name('booking_monitor');