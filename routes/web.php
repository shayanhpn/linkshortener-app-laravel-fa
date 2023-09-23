<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogOutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AllUsersController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DeleteUserController;
use App\Http\Controllers\captcha\CaptchaController;
use App\Http\Controllers\Admin\UpdateUserController;
use App\Http\Controllers\Admin\UsersLinksController;
use App\Http\Controllers\Generator\RedirectController;
use App\Http\Controllers\Admin\ViewSingleUserController;
use App\Http\Controllers\Generator\DeleteLinkController;
use App\Http\Controllers\Generator\ViewAllLinksController;
use App\Http\Controllers\Generator\LinkGeneratorController;

//Show Main Page
Route::get('/',[MainController::class,'showMainPage'])->name('main');

//Show Login Page
Route::get('/login',[MainController::class,'showLoginPage'])->name('view.login');
Route::post('/login',[LoginController::class,'loginUser'])->name('login');

//Show About Page
Route::get('/about',[MainController::class,'showAboutPage'])->name('about');

//LogOut User
Route::post('/logout',[LogOutController::class,'logoutUser'])->name('logout');

//Show Register Page
Route::get('/register',[MainController::class,'showRegisterPage'])->name('view.register');
Route::post('/register',[RegisterController::class,'registerUser'])->name('register');

//Show Dashboard Page
Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function(){
    Route::get('/mypanel',[DashboardController::class,'showDashboardPage'])->name('panel');
    Route::get('/users',[AllUsersController::class,'viewAllUsers'])->name('users')->middleware('admin');
    Route::get('/links',[ViewAllLinksController::class,'viewAllLinks'])->name('links')->middleware('admin');
    Route::get('/settings',[SettingsController::class,'viewSettingsPage'])->name('view.settings');
    Route::get('/user/{id}',[ViewSingleUserController::class,'viewSingleUser'])->name('single.user')->middleware('admin');
    Route::get('/user/update/{id}',[UpdateUserController::class,'viewUpdateUser'])->name('view.update-user')->middleware('auth');
    Route::put('/user/update/{user}',[UpdateUserController::class,'updateUser'])->name('update.user');
    Route::get('/delete/user/{user}',[DeleteUserController::class,'viewDeleteUser'])->name('view.delete-user');
    Route::delete('/delete/user/{user}',[DeleteUserController::class,'deleteUser'])->name('delete.user');
    Route::put('/settings',[SettingsController::class,'submitSettings'])->name('submit.setting');
    Route::get('/delete/link/{link}',[DeleteLinkController::class,'viewDeletePage'])->name('view.delete-link');
    Route::delete('/delete/link/{link}',[DeleteLinkController::class,'deleteLink'])->name('delete.link');
});

Route::get('/mylinks',[UsersLinksController::class,'viewUsersLinks'])->name('users.links');

// Reload Captcha
Route::get('/reload-captcha',[CaptchaController::class,'reloadCaptcha']);


// Generate Link
Route::post('/',[LinkGeneratorController::class,'generateLink'])->name('linkgen');


//Redirect DestLink To Source Link
Route::get('/{code}',[RedirectController::class,'redirectLink'])->name('redirect');
