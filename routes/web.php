<?php

use App\Http\Controllers\GardenController;
use App\Models\Feature;
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
    return view('index')->with(['features' => Feature::all()]);
});

Route::put('/garden/{id}/update', [GardenController::class, 'update'])->name('garden.update');
