<?php

use App\Http\Livewire\Students;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/students',Students::class);
Route::get('/sachin', function () {

    DB::table('users')->insert(['password'=>23456,'email'=>'sachin@gmail.com','name'=>'sachin singh']);
    echo "successfully inserted";
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
