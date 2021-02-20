<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplyCourseController;
use App\Http\Controllers\EnquiryController;

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
    return view('welcome');
});

Route::get('/it', function () {
    return view('it');
});

Route::get('/electrical', function () {
    return view('electrical');
});

Route::get('/civil', function () {
    return view('civil');
});

Route::get('/mechanical', function () {
    return view('mechanical');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/applycourse', [ApplyCourseController::class, 'store']);

Route::post('/sendenquiry', [EnquiryController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
