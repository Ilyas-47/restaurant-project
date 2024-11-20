<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodPlaceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\ChefController;





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

/*menu */
Route::get('/', MenuController::class)->name('menu');
Route::get('/menu', MenuController::class)->name('menu');
Route::get('/menu_page', MenuController::class)->name('menu');

/*foodplace */
Route::get('/foodplace', FoodPlaceController::class)->name('foodplace');
Route::get('/food',FoodPlaceController::class)->name('foodplace');

/*login */
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'processLogin'])->name('login.process');

/*order */
Route::get('/order',OrderController::class)->name('order');


/*product */
Route::get('/product',ProductController::class)->name('product');

/*sign_up*/
Route::get('/sign_up', [SignUpController::class, 'showSignupForm'])->name('signup');
Route::post('/sign_up', [SignUpController::class, 'processSignup'])->name('signup.process');

/*chef*/
Route::get('/chefs',ChefController::class)->name('chefs');

Route::get('/form_plat',function(){
    return view('layout.form_plat_l');
})->name('form_plat');
Route::get('/form_chef',function(){
    return view('layout.form_chef_l');
})->name('form_chef');
Route::get('/message',function(){
    return view('pages.mess_sucess');
})->name('message');
Route::get('/admin',function(){
    return view('pages.login_admin');
})->name('admin');






