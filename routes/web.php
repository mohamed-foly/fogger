<?php

use App\Http\Controllers\Web\LogController;
use Illuminate\Support\Facades\Route;

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
    return "Fogger is running";
});

Route::middleware('auth')->group(function(){
    Route::get('/entries', [LogController::class, 'index'])->name('entries.index');
    Route::get('/entries/{entry}', [LogController::class, 'show'])->name('entry.show');    
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
