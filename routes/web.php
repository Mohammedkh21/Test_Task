<?php

use App\Http\Controllers\ProfileController;
use App\Models\Supplier;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\MainController;
use App\Http\Controllers;


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
Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function (){

    Route::get('projects/create',MainController::class)->name('project');
    Route::middleware('project_status')->group(function (){
        Route::singleton('projects.purchase',Controllers\Dashboard\PurchaseController::class)->creatable();
        Route::singleton('projects.finance',Controllers\Dashboard\FinanceController::class)->creatable();
        Route::singleton('projects.document',Controllers\Dashboard\DocumentController::class)->creatable();

    });
});















Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
