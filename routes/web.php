<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\NewsSubscriberController;

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


Route::group([
    'as'=>'frontend.'
],
function(){
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::post('news-subscribe', [NewsSubscriberController::class, 'store'])->name('news.subscrice');

});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
