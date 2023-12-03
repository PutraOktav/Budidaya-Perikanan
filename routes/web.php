<?php

use App\Models\Riwayat;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IkanController;
use App\Http\Controllers\PakanController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\FishFarmController;
use App\Http\Controllers\FishFoodController;
use App\Http\Controllers\FishTypeController;
use App\Http\Controllers\RiwayatSamplingController;
use App\Http\Controllers\FishFarmSamplingController;

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

Route::get('/', 'HomeController@index')->name('home');

// Route untuk mengelola data fish farm
Route::get('/fish-farm', [FishFarmController::class, 'index'])->name('fish-farm.index');
Route::post('/fish-farm/calculate', [FishFarmController::class, 'calculate'])->name('fish-farm.calculate');

// Route untuk mengelola data riwayats
Route::get('/riwayats', [RiwayatController::class, 'index'])->name('riwayats.index');
Route::get('/riwayats/{riwayat}', [RiwayatController::class, 'show'])->name('riwayats.show');
Route::delete('/riwayats/{riwayat}', [RiwayatController::class, 'destroy'])->name('riwayats.destroy');

// Route untuk mengelola data riwayat sampling
Route::get('/riwayat-samplings', [RiwayatSamplingController::class, 'index'])->name('riwayat-samplings.index');
Route::get('/riwayat-samplings/{riwayat}', [RiwayatSamplingController::class, 'show'])->name('riwayat-samplings.show');
Route::delete('/riwayat-samplings/riwayat}', [RiwayatSamplingController::class, 'destroy'])->name('riwayat-samplings.destroy');

// Route untuk mengelola data fish farm sampling
Route::get('/fish-farm-sampling', [FishFarmSamplingController::class, 'index'])->name('fish-farm-sampling.index');
Route::post('/fish-farm-sampling/calculate', [FishFarmSamplingController::class, 'calculate'])->name('fish-farm-sampling.calculate');

// Route untuk mengelola data jenis ikan
Route::get('/fishTypes', [FishTypeController::class, 'index'])->name('fishTypes.index');
Route::get('/fishTypes/create', [FishTypeController::class, 'create'])->name('fishTypes.create');
Route::post('/fishTypes', [FishTypeController::class, 'store'])->name('fishTypes.store');
Route::get('/fishTypes/{fishType}', [FishTypeController::class, 'show'])->name('fishTypes.show');
Route::get('/fishTypes/{fishType}/edit', [FishTypeController::class, 'edit'])->name('fishTypes.edit');
Route::put('/fishTypes/{fishType}', [FishTypeController::class, 'update'])->name('fishTypes.update');
Route::delete('/fishTypes/{fishType}', [FishTypeController::class, 'destroy'])->name('fishTypes.destroy');


// Route untuk mengelola data makanan ikan
Route::get('/fishFoods', [FishFoodController::class, 'index'])->name('fishFoods.index');
Route::get('/fishFoods/create', [FishFoodController::class, 'create'])->name('fishFoods.create');
Route::post('/fishFoods', [FishFoodController::class, 'store'])->name('fishFoods.store');
Route::get('/fishFoods/{fishFood}', [FishFoodController::class, 'show'])->name('fishFoods.show');
Route::get('/fishFoods/{fishFood}/edit', [FishFoodController::class, 'edit'])->name('fishFoods.edit');
Route::put('/fishFoods/{fishFood}', [FishFoodController::class, 'update'])->name('fishFoods.update');
Route::delete('/fishFoods/{fishFood}', [FishFoodController::class, 'destroy'])->name('fishFoods.destroy');
