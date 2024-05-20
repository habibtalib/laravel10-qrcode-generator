<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRcodeGenerateController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [QRcodeGenerateController::class, 'qrcode']);
