<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardOneController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\LostDocumentController;

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
    return view('landing');
});

Route::get('/lostID', function () {
    return view('lostidpage');
})->name('lostidpage');

Route::post('/lostdocument/store', [LostDocumentController::class, 'store'])->name('lostdocument.store');


Route::get('/lostDoc', function () {
    return view('lostdocspage');
})->name('lostdocpage');


Route::group(['prefix' => 'admins'], function() {

    Route::get('/', [DashboardOneController::class, 'home'])->name('dashone');
    Route::get('/forms', [DashboardOneController::class, 'form'])->name('dashoneform');
    Route::get('/Table', [DashboardOneController::class, 'table'])->name('dashonetable');
    Route::get('/blank', [DashboardOneController::class, 'home'])->name('dashoneblank');
    Route::get('/formtable', [DashboardOneController::class, 'formtable'])->name('dashoneformtable');

    Route::get('/lostdocuments', [LostDocumentController::class, 'index'])->name('lostdocuments.index');
    Route::get('/lostdocument/{id}', [LostDocumentController::class, 'show'])->name('lostdocument.show');

});
