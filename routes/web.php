<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//FRONTEND CONTROLLERS
use App\Http\Controllers\Frontend\AuthController AS FrontendAuth;
use App\Http\Controllers\Frontend\FrontendController AS Frontend;

//BACKEND CONTROLLERS

// D
use App\Http\Controllers\Backend\DashboardController AS BackendDashboard;
use App\Http\Controllers\Backend\DesignationsController AS BackendDesignations;

// S
use App\Http\Controllers\Backend\ScreensController AS BackendScreens;

// U
use App\Http\Controllers\Backend\UsersController AS BackendUsers;
use App\Http\Controllers\Backend\UserRolesController AS BackendUserRoles;


//1 - Frontend Routes
Route::group([ 'prefix' =>'/'], function () {

    Route::get('/', [Frontend::class, 'index'])->name('frontend.homepage');


    Route::get('/sign-in', [FrontendAuth::class, 'signIn'])->name('frontend.auth.signIn');
    Route::post('/sign-in/create', [FrontendAuth::class, 'login'])->name('frontend.auth.login');
    Route::post('/sign-up/create', [FrontendAuth::class, 'store'])->name('frontend.auth.store');
    Route::post('/app-logout', [FrontendAuth::class, 'appLogout'])->name('frontend.auth.appLogout');


});

//2 - Auth Routes
Route::middleware(['auth', 'verified'])->group(function () {

    //2 - Admin Routes
    Route::group([ 'prefix' =>'admin', 'middleware' => ['isAdmin']], function () {
//        dd('admin');

        // D
        Route::get('/', [BackendDashboard::class, 'index'])->name('backend.dashboard');

        Route::get('/designations', [BackendDesignations::class, 'index'])->name('backend.designations.index');
        Route::post('/designations/store', [BackendDesignations::class, 'store'])->name('backend.designations.store');
        Route::post('/designations/get', [BackendDesignations::class, 'get'])->name('backend.designations.get');
        Route::post('/designations/status', [BackendDesignations::class, 'status'])->name('backend.designations.status');

        /*// N
        Route::get('/news', [BackendNews::class, 'index'])->name('backend.news.index');
        Route::get('/news/create', [BackendNews::class, 'create'])->name('backend.news.create');
        Route::get('/news/edit/{slug}', [BackendNews::class, 'edit'])->name('backend.news.edit');
        Route::post('/news/store', [BackendNews::class, 'store'])->name('backend.news.store');
        Route::post('/news/delete', [BackendNews::class, 'delete'])->name('backend.news.delete');
        Route::post('/news/slug-generator', [BackendNews::class, 'slugGenerator'])->name('backend.news.slugGenerator');
        Route::post('/news/upload-image', [BackendNews::class, 'imageUpload'])->name('backend.news.imageUpload');
        Route::post('/news/set-primary-image', [BackendNews::class, 'setPrimaryImage'])->name('backend.news.setPrimaryImage');
        Route::post('/news/image-delete', [BackendNews::class, 'deleteImage'])->name('backend.news.deleteImage');*/


        // S

        Route::get('/screens', [BackendScreens::class, 'index'])->name('backend.screens.index');
        Route::post('/screens/store', [BackendScreens::class, 'store'])->name('backend.screens.store');
        Route::post('/screens/get', [BackendScreens::class, 'get'])->name('backend.screens.get');
        Route::post('/screens/status', [BackendScreens::class, 'status'])->name('backend.screens.status');
        Route::post('/screens/slug-generator', [BackendScreens::class, 'slugGenerator'])->name('backend.screens.slugGenerator');


        // U

        Route::get('/users', [BackendUsers::class, 'index'])->name('backend.users.index');
        Route::get('/users/create', [BackendUsers::class, 'create'])->name('backend.users.create');
        Route::get('/users/edit/{slug}', [BackendUsers::class, 'edit'])->name('backend.users.edit');
        Route::get('/users/screens/{slug}', [BackendUsers::class, 'screens'])->name('backend.users.screens');
        Route::post('/users/store', [BackendUsers::class, 'store'])->name('backend.users.store');
        Route::post('/users/delete', [BackendUsers::class, 'delete'])->name('backend.users.delete');
        Route::post('/users/user-screen/set', [BackendUsers::class, 'setUserScreen'])->name('backend.users.setUserScreen');

        Route::get('/user-roles', [BackendUserRoles::class, 'index'])->name('backend.userRoles.index');
        Route::post('/user-roles/store', [BackendUserRoles::class, 'store'])->name('backend.userRoles.store');
        Route::post('/user-roles/get', [BackendUserRoles::class, 'get'])->name('backend.userRoles.get');
        Route::post('/user-roles/status', [BackendUserRoles::class, 'status'])->name('backend.userRoles.status');
        Route::post('/user-roles/slug-generator', [BackendUserRoles::class, 'slugGenerator'])->name('backend.userRoles.slugGenerator');


    });


    //3 - Reservations Manager Routes
    Route::group([ 'prefix' =>'reservations', 'middleware' => ['isReservationsManager']], function () {
//        dd('isReservationsManager');
        // D
        Route::get('/', [BackendDashboard::class, 'index'])->name('backend.dashboard');


    });





    /*Route::post('/users/upload-image', [BackendUsers::class, 'imageUpload'])->name('backend.users.imageUpload');
    Route::get('/my-account', [Frontend::class, 'myAccount'])->name('frontend.myAccount');
    Route::get('/my-account/inbox', [Frontend::class, 'myAccountInbox'])->name('frontend.myAccount.myAccountInbox');
    Route::get('/my-account/subscription', [Frontend::class, 'myAccountSubscription'])->name('frontend.myAccount.myAccountSubscription');
    Route::get('/my-account/privacy', [Frontend::class, 'myAccountPrivacy'])->name('frontend.myAccount.myAccountPrivacy');
    Route::get('/my-account/customer-portal', [Frontend::class, 'myAccountCustomerPortal'])->name('frontend.myAccount.myAccountCustomerPortal');
    Route::get('/my-account/subscribe/{slug}', [Frontend::class, 'myAccountSubscribe'])->name('frontend.myAccount.myAccountSubscribe');
    Route::get('/my-account/subscription-success', [Frontend::class, 'myAccountSubscriptionSuccess'])->name('frontend.myAccount.myAccountSubscriptionSuccess');
    Route::get('/my-account/subscription-canceled', [Frontend::class, 'myAccountSubscriptionCanceled'])->name('frontend.myAccount.myAccountSubscriptionCanceled');



    Route::post('/my-account/update', [Frontend::class, 'myAccountUpdate'])->name('frontend.myAccountUpdate');
    Route::post('/my-account/privacy/update', [Frontend::class, 'myAccountPrivacyUpdate'])->name('frontend.myAccountPrivacyUpdate');
    Route::post('/my-account/subscription/update', [Frontend::class, 'myAccountSubscriptionUpdate'])->name('frontend.myAccountSubscriptionUpdate');
    Route::post('/my-account/get-inbox', [Frontend::class, 'myAccountGetMessage'])->name('frontend.myAccount.myAccountGetMessage');*/


});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::fallback(function () {
    return view('errors.404');
});

require __DIR__.'/auth.php';
