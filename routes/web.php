<?php

use Illuminate\Support\Facades\{Auth, Route};
use App\Http\Controllers\dashboard\{
    HomeController, UserProfileController, CategoryController,
    SubCategoryController, UnitController, TypeController, CompanyController, ClientController,
    ProductController, PriceController, ExportedProductController, InvoiceController,
    NamePriceController,
};

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

Route::prefix('/')->middleware(['auth'])->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/user-profile/{id}', [UserProfileController::class, 'indexProfile'])->name('user-profile.index');
    Route::get('/user-profile/{id}/edit', [UserProfileController::class, 'editProfile'])->name('user-profile.edit');
    Route::patch('/user-profile/{id}', [UserProfileController::class, 'update'])->name('user-profile.updateInfo');
    Route::get('/user-profile/change-password/{id}', [UserProfileController::class, 'changePasswordView'])->name('user-profile.changePasswordView');
    Route::patch('/user-profile/change-password/{id}/submit', [UserProfileController::class, 'changePassword'])->name('user-profile.changePassword');


    Route::resource('categories', CategoryController::class)->except(['show']);
    Route::resource('/subcategories', SubCategoryController::class);
    Route::resource('/units', UnitController::class);
    Route::resource('/types', TypeController::class);
    Route::resource('/companies', CompanyController::class);
    Route::resource('/exported-products', ExportedProductController::class);
    Route::resource('/clients', ClientController::class);
    Route::resource('/products', ProductController::class);
    Route::get('/search', [ProductController::class, 'productsSearchResult'])->name('productsSearchResult.index');
    Route::resource('/prices', PriceController::class);
    Route::resource('/names-prices', NamePriceController::class);
    Route::resource('/invoices', InvoiceController::class);
});

