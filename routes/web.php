<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VotingController;
use App\Http\Controllers\Api\VotingController as ApiVotingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/', HomeController::class . '@index')->name('home');
    Route::get('/vote/{id}', VotingController::class . '@vote')->name('vote');
});

Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('/', AdminController::class . '@index')->name('admin.home');
    Route::get('/calon', AdminController::class . '@calon')->name('admin.calon');
    Route::post('/addCalon', AdminController::class . '@addCalon')->name('admin.addcalon');
    Route::get('/deletecalon/{id}', AdminController::class . '@deleteCalon')->name('admin.deletecalon');
    Route::get('/editcalon/{id}', AdminController::class . '@editCalon')->name('admin.editcalon');
    Route::post('/updateCalon/{id}', AdminController::class . '@updateCalon')->name('admin.updatecalon');

    // Route::get('/totalSuara', ApiVotingController::class . '@getSuara')->name('api.totalSuara');
    // Route::get('/pemilihTerkini', ApiVotingController::class . '@getPemilihTerkini')->name('api.pemilihTerkini');
    // Route::get('/sudahMemilih', ApiVotingController::class . '@getSudahMemilih')->name('api.sudahMemilih');

    Route::get('/pemilih', AdminController::class . '@dataPemilih')->name('admin.pemilih');
    Route::post('/importPemilih', AdminController::class . '@importPemilih')->name('admin.importPemilih');
    Route::get('/downloadTemplate', AdminController::class . '@downloadTemplate')->name('admin.downloadTemplate');
    Route::get('/resetPemilih/{id}/{id_calon}', AdminController::class . '@resetPemilih')->name('admin.resetPemilih');
    Route::get('/deletePemilih/{id}', AdminController::class . '@deletePemilih')->name('admin.deletePemilih');
    Route::get('/kelas', AdminController::class . '@dataKelas')->name('admin.kelas');
    Route::get('/addAdmin', AdminController::class . '@addAdmin')->name('admin.addAdmin');
    Route::post('/addAdmin', AdminController::class . '@addAdminPost')->name('admin.addAdminPost');
});
