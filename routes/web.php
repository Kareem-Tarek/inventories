<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\HomeController;
use App\Http\Controllers\dashboard\UserProfileController;
use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\SubCategoryController;
use App\Http\Controllers\dashboard\QuantityController;
use App\Http\Controllers\dashboard\TypeController;
use App\Http\Controllers\dashboard\CompanyController;

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

Auth::routes();

Route::get('/', function () {
    return redirect()->route('login');
});

//---------> START Dashboard routes
Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    //---------> START Dashboard (home or index) routes
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    //---------> END Dashboard (home or index) routes

    //---------> START User Profile routes
    Route::get('/user-profile/{id}', [UserProfileController::class, 'indexProfile'])->name('user-profile.index');
    Route::get('/user-profile/{id}/edit', [UserProfileController::class, 'editProfile'])->name('user-profile.edit');
    Route::patch('/user-profile/{id}', [UserProfileController::class, 'update'])->name('user-profile.updateInfo');
    Route::get('/user-profile/change-password/{id}', [UserProfileController::class, 'changePasswordView'])->name('user-profile.changePassView');
    Route::patch('/user-profile/change-password/{id}/submit', [UserProfileController::class, 'changePassword'])->name('user-profile.changePass');
    //---------> END User Profile routes

    //---------> START Category routes
    Route::resource('/categories', CategoryController::class);
    //---------> END Category routes

    //---------> START SubCategory routes
    Route::resource('/subcategories', SubCategoryController::class);
    //---------> END SubCategory routes

    //---------> START Quantity routes
    Route::resource('/quantities', QuantityController::class);
    //---------> END Quantity routes

    //---------> START Type routes
    Route::resource('/types', TypeController::class);
    //---------> END Type routes

    //---------> START Company routes
    Route::resource('/companies', CompanyController::class);
    //---------> END Company routes
});
//---------> END Dashboard routes

