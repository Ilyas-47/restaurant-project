<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodPlaceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\Form_ChefController;
use App\Http\Controllers\Form_PlatController;
use App\Http\Controllers\ChefListController;
use App\Http\Controllers\PlatListController;









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
Route::get('/chef_profil',[ChefController::class, 'chef_profil'])->name('chef_profil');

/*form plat insertion donnees*/
Route::get('/form_plat', [Form_PlatController::class, 'ShowChef'])->name('form_plat');
Route::post('/form_plat', [Form_PlatController::class, 'storePlat'])->name('store_plat');

/*form chef insertion donnees*/
Route::get('/form_chef', [Form_ChefController::class, 'ShowFormChef'])->name('form_chef');
Route::post('/form_chef', [Form_ChefController::class, 'Add_Chef'])->name('Add_Chef');

/*chef list admin page*/
Route::get('/chef_list/{id}/edit', [ChefListController::class, 'edit'])->name('chef_edit');
Route::put('/chef_list/{id}', [ChefListController::class, 'update'])->name('chef_update');
Route::post('/chef_list/{id}', [ChefListController::class, 'destroy'])->name('chef_destroy');
Route::get('/chef_list/{id}/delete', [ChefListController::class, 'destroy'])->name('chef_destroy');
Route::delete('/chef_list/{id}/delete', [ChefListController::class, 'destroy'])->name('chef_destroy');
Route::get('/chef_list', [ChefListController::class, 'index'])->name('chef_list');



/*plat list admin page*/
Route::get('/list_plat', [PlatListController::class, 'index'])->name('list_plat');
Route::get('/list_plat/{id}/edit', [PlatListController::class, 'edit'])->name('plat_edit');
Route::put('/list_plat/{id}', [PlatListController::class, 'update'])->name('plat_update');
Route::delete('/chef_list/{id}', [PlatListController::class, 'destroy'])->name('plat_dest');


Route::get('/message',function(){
    return view('pages.mess_sucess');
})->name('message');

Route::get('/admin',function(){
    return view('pages.login_admin');
})->name('admin');






