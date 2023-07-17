<?php

use App\Http\Controllers;
use App\Http\Controllers\Dashboard\project\MainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


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
    Route::group([],function (){
        Route::singleton('projects.purchase', Controllers\Dashboard\project\PurchaseController::class)->creatable();
        Route::singleton('projects.finance', Controllers\Dashboard\project\FinanceController::class)->creatable();
        Route::singleton('projects.document', Controllers\Dashboard\project\DocumentController::class)->creatable();

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
