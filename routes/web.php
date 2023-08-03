<?php

use App\Http\Controllers\TelephoneController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
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

$basePath = "App\Http\Controllers";

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/client', [ClientController::class, 'index'])->name('client');
    Route::get('/client/add', [ClientController::class, 'add'])->name('client.add');
    Route::post('/client/save', [ClientController::class, 'save'])->name('client.save');
    Route::get('/client/edit/{id}', [ClientController::class, 'edit'])->name('client.edit');
    Route::put('/client/update/{id}', [ClientController::class, 'update'])->name('client.update');
    Route::get('/client/delete/{id}', [ClientController::class, 'delete'])->name('client.delete');
    Route::get('/client/detail/{id}', [ClientController::class, 'detail' ])->name('client.detail');

    Route::get('telephone/add/{id}', [TelephoneController::class, 'add' ])->name('telephone.add');
    Route::post('telephone/save/{id}', [TelephoneController::class, 'save' ])->name('telephone.save');
});


