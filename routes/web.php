<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

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

// Route::get('/', function () {
//     return view('frontend.index');
// })->name('frontend.index');
// Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('frontend.index');

Route::group([
    'as'=>'frontend'
],
function(){
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
