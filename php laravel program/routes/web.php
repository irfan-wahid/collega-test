<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CifController;

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

Route::Get('/', [CifController::class, 'getData']);

Route::Get('/tambah', [CifController::class, 'showAddForm']);

Route::Get('/edit/{cifid}', [CifController::class, 'showEditForm']);

Route::Post('/store', [CifController::class, 'store']);
Route::Post('/edit', [CifController::class, 'edit']);

Route::Get('/delete/{cifid}', [CifController::class, 'delete']);
