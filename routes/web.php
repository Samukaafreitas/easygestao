<?php

use App\Http\Controllers\Plan_UserController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\PlanUserController;
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

Route::get('/', [PlanController::class, 'index']);
Route::get('/plans/list', [PlanController::class, 'plans']);
Route::get('/plans/create', [PlanController::class, 'create']);
Route::post('/plans', [PlanController::class, 'storePlan']);
Route::get('/users/list', [PlanUserController::class, 'plan_users']);
Route::get('/users/create', [PlanUserController::class, 'plan_User_Create']);
Route::post('/users', [PlanUserController::class, 'storePlan_user']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
