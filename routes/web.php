<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/quienes-somos', [PageController::class, 'about'])->name('about');
Route::get('/organigrama', [PageController::class, 'organization'])->name('organization');
Route::get('/unidades-empresariales', [UebController::class, 'index'])->name('uebs.index');
Route::get('/unidades-empresariales/{ueb:slug}', [UebController::class, 'show'])->name('uebs.show');
Route::get('/catalogos', [CatalogController::class, 'index'])->name('catalogs');
