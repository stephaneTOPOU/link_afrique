<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Utilisateur\ProfileComponent;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class);

// Route::get('/', function () {
//     return view('livewire.home-component');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';


Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/profil/utilisateur', ProfileComponent::class)->name('user.profil');
});

// //pour admin
// Route::middleware(['auth:sanctum','verified'])->group(function(){

// });

