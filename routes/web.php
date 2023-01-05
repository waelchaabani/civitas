<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
Route::get('/Page/create', [PageController::class,'index']);
Route::post('/Page/store', [PageController::class,'store'])->name('page.store');
Route::get('/Page/liste', [PageController::class,'create']);
Route::get('/Page/liste/edit/{id}', [PageController::class,'edit'])->name('page.edit');
Route::put('/Page/liste/update/{id}', [PageController::class,'update'])->name('page.update');
Route::delete('/Page/delete/{id}', [PageController::class,'destroy'])->name('page.delete');



Route::get('/generate-qr-code', function () {
    $path = public_path('images/'.time().'.png');

    return QrCode::size(300)
                ->generate('A simple example of QR code', $path);
});


