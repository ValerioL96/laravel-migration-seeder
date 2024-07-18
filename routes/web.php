<?php
use App\Http\Controllers\Guest\TrainController as GuestTrainController;
use Illuminate\Support\Facades\Route;



Route::get('/', [GuestTrainController::class,'index'])->name('guest.home');
