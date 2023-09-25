<?php

use Illuminate\Support\Facades\{Auth, Route};
use App\Http\Controllers\dashboard\{
    HomeController, UserProfileController, CategoryController,
    SubCategoryController, UnitController, TypeController, CompanyController, ProductController,
    PriceController, ExportedProductController, InvoiceController
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

Route::fallback(function () {
    return abort('404');
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
    Route::get('/user-profile/change-password/{id}', [UserProfileController::class, 'changePasswordView'])->name('user-profile.changePasswordView');
    Route::patch('/user-profile/change-password/{id}/submit', [UserProfileController::class, 'changePassword'])->name('user-profile.changePassword');
    //---------> END User Profile routes

    Route::resource('categories', CategoryController::class)->except(['show']);



    //---------> START Sub Category routes
    Route::resource('/subcategories', SubCategoryController::class);
    //---------> END Sub Category routes

    //---------> START Unit routes
    Route::resource('/units', UnitController::class);
    //---------> END Unit routes

    //---------> START Type routes
    Route::resource('/types', TypeController::class);
    //---------> END Type routes

    //---------> START Company routes
    Route::resource('/companies', CompanyController::class);
    //---------> END Company routes

    //---------> START Exported Product routes
    Route::resource('/exported-products', ExportedProductController::class);
    //---------> END Exported Product routes

    //---------> START Product routes
    Route::resource('/products', ProductController::class);
    Route::get('/search', [ProductController::class, 'productsSearchResult'])->name('productsSearchResult.index');
    //---------> END Product routes

    //---------> START Price routes
    Route::resource('/prices', PriceController::class);
    //---------> END Price routes

    //---------> START Invoice routes
    Route::resource('/invoices', InvoiceController::class);
    //---------> END Invoice routes
});
//---------> END Dashboard routes

