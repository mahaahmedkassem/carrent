<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;

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
    return view('welcome');
});



Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


       
        

Route::group(['middleware' => ['auth', 'verified'],'prefix' => 'dashboard', "as" => "dashboard"], function () {
    Route::get('dashboard', [CarController::class, 'dashboard'])->name('.dashboard');
    Route::get('/', [CarController::class, 'index'])->name('.index');
    Route::group(['prefix' => 'cars', 'as' => '.cars.'], function () {
      Route::get('/', [CarController::class, 'index'])->name('index');
      Route::get('/addcar', [CarController::class, 'create'])->name('create');
      Route::post('/store', [CarController::class, 'store'])->name('store');
    //   Route::get('/show/{car_id}', [CarController::class, 'show'])->name('show');
    //   Route::get('/edit/{car_id}', [CarController::class, 'edit'])->name('edit');
    //   Route::put('/update/{car_id}', [CarController::class, 'update'])->name('update');
    //   Route::delete('/delete', [CarController::class,'destroy'])->name('delete');
  });

//   Route::group(['prefix' => 'subjects', 'as' => '.subjects.'], function () {
//       Route::get('/', [SubjectsController::class, 'index'])->name('index');
//       Route::get('/create', [SubjectsController::class, 'create'])->name('create');
//       Route::post('/store', [SubjectsController::class, 'store'])->name('store');

// });
});

// Route::get('addcar', [CarController::class, 'create'])->name('create');
// Route::post('storecar', [CarController::class, 'store'])->name('storecar');



         


