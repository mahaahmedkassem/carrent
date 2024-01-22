<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CarrentalController;

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
   
    
    Route::group(['prefix' => 'cars', 'as' => '.cars.'], function () {
        Route::get('/', [CarController::class, 'index'])->name('index');
      Route::get('/addcar', [CarController::class, 'create'])->name('create');
      Route::post('/store', [CarController::class, 'store'])->name('store');
      // Route::get('/show/{car_id}', [CarController::class, 'show'])->name('show');
      Route::get('/edit/{car_id}', [CarController::class, 'edit'])->name('edit');
      // Route::get('/trashedcar',[CarController ::class, 'trashed']);
      // Route::get('/fdelet/{car_id}', [CarController::class, 'forcedelete'])->name('forcedelete');
      Route::put('/update/{car_id}', [CarController::class, 'update'])->name('update');
      Route::get('/delete/{car_id}', [CarController::class,'destroy'])->name('delete');
  });
  Route::group(['prefix' => 'trashedcars', 'as' => '.trashedcars.'], function () {
    Route::get('/', [CarController::class, 'trashed'])->name('trashed');
  
  Route::get('/fdelete/{car_id}', [CarController::class, 'forcedelete'])->name('forcedelete');

});





  Route::group(['prefix' => 'cat', 'as' => '.cat.'], function () {
      Route::get('/', [CategoryController::class, 'index'])->name('index');
      Route::get('/addcat', [CategoryController::class, 'create'])->name('create');
      Route::post('/store', [CategoryController::class, 'store'])->name('store');
      Route::get('/edit/{cat_id}', [CategoryController::class, 'edit'])->name('edit');
      Route::put('/update/{cat_id}', [CategoryController::class, 'update'])->name('update');
      Route::get('/delete/{cat_id}', [CategoryController::class,'destroy'])->name('delete');
     
});
Route::group(['prefix' => 'user', 'as' => '.user.'], function () {
  Route::get('/', [UserController::class, 'index'])->name('index');
  Route::get('/adduser', [UserController::class, 'create'])->name('create');
  Route::post('/store', [UserController::class, 'store'])->name('store');
  Route::get('/edit/{u_id}', [UserController::class, 'edit'])->name('edit');
  Route::put('/update/{u_id}', [UserController::class, 'update'])->name('update');
  Route::get('/delete/{u_id}', [UserController::class,'destroy'])->name('delete');




});
Route::group(['prefix' => 'test', 'as' => '.test.'], function () {
  Route::get('/', [TestimonialController::class, 'index'])->name('index');
  Route::get('/addtest', [TestimonialController::class, 'create'])->name('create');
  Route::post('/store', [TestimonialController::class, 'store'])->name('store');
  Route::get('/edit/{test_id}', [TestimonialController::class, 'edit'])->name('edit');
  Route::put('/update/{test_id}', [TestimonialController::class, 'update'])->name('update');
  Route::get('/delete/{test_id}', [TestimonialController::class,'destroy'])->name('delete');
 

});
Route::group(['prefix' => 'contact', 'as' => '.contact.'], function () {
  Route::get('/', [ContactController::class, 'index'])->name('index');
  // Route::get('/contactus', [ContactController::class, 'create'])->name('create');
  // Route::post('/emailsended',[ContactController ::class, 'send'])->name('sendemail');
  Route::get('/show/{contact_id}',[ContactController ::class, 'show'])->name('showemail');



});


});


// Route::get('addcar', [CarController::class, 'create'])->name('create');
// Route::post('storecar', [CarController::class, 'store'])->name('storecar');

Route::get('/show/{car_id}', [CarController::class, 'show'])->name('show');
Route::get('/contactus', [ContactController::class, 'create'])->name('createemail');
Route::post('/emailsended',[ContactController ::class, 'send'])->name('sendemail');
Route::get('index',[CarrentalController::class, 'try'])->name('index');
Route::get('listing',[CarrentalController::class, 'listing'])->name('listing');

Route::get('blog',[CarrentalController::class, 'blog'])->name('blog');
Route::get('about',[CarrentalController::class, 'about'])->name('about');
Route::get('Testimonials',[CarrentalController::class, 'Testimonials'])->name('Testimonials');
Route::get('contactpage',[CarrentalController::class, 'contact'])->name('contact');







         


