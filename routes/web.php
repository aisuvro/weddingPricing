<?php

use App\Livewire\PaymentPage;
use App\Livewire\PricePlan;
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

Route::get('/', PricePlan::class);

Route::get('/payment', PaymentPage::class);
