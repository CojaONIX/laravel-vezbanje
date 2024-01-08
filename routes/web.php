<?php

use Illuminate\Support\Facades\Route;
use App\Models\Ocene;
use App\Http\Controllers\OceneController;

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

Route::get('/', function () {
    $ocene = Ocene::all();
    return view('welcome', compact('ocene'));
});

Route::view('/dodaj-ocenu', 'addGrade');
Route::post('/add-user-grade', [OceneController::class, 'addGrade']);
Route::delete('/delete-user-grade/{id}', [OceneController::class, 'deleteGrade']);
