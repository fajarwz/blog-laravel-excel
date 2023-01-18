<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('users.index'); // view
Route::post('import', [UserController::class, 'import'])->name('users.import'); // import route
Route::get('export', [UserController::class, 'export'])->name('users.export'); // export route