<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Front\frontController;
use App\Http\Controllers\Web\File\fileController;
use App\Http\Controllers\Web\Form\complainController;


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



// Frontend controller functions will be here
Route::controller(frontController::class)->group(function(){
    Route::get('/','showFrontMainPage')->name('showFrontMainPage');
    //mine
    Route::get('realEstateCatalogRent','realEstateCatalogRent')->name('realEstateCatalogRent');
    Route::get('realEstateAbout','realEstateAbout')->name('realEstateAbout');
    Route::get('realEstateAccountInfo','realEstateAccountInfo')->name('realEstateAccountInfo');
    Route::get('realEstateAccountNotif','realEstateAccountNotif')->name('realEstateAccountNotif');
    Route::get('realEstateAccountReviews','realEstateAccountReviews')->name('realEstateAccountReviews');
    Route::get('realEstateAccountWishlist','realEstateAccountWishlist')->name('realEstateAccountWishlist');
    Route::get('realEstateAddProperty','realEstateAddProperty')->name('realEstateAddProperty');
    Route::get('realEstateBlog','realEstateBlog')->name('realEstateBlog');
    Route::get('realEstateBlogSinle','realEstateBlogSingle')->name('realEstateBlogSingle');
    Route::get('realEstateCatalogSale','realEstateCatalogSale')->name('realEstateCatalogSale');
    Route::get('realEstateAccount','realEstateAccount')->name('realEstateAccount');
    Route::get('realEstateHelpCenter','realEstateHelpCenter')->name('realEstateHelpCenter');
    Route::get('realEstatePropertyPromotion','realEstatePropertyPromotion')->name('realEstatePropertyPromotion');
    Route::get('realEstateSingle','realEstateSingle')->name('realEstateSingle');
    Route::get('realEstateVendorProperties','realEstateVendorProperties')->name('realEstateVendorProperties');
    Route::get('realEstateVendorReviews','realEstateVendorReviews')->name('realEstateVendorReviews');
    Route::get('userAccountInfoSecurity','userAccountInfoSecurity')->name('userAccountInfoSecurity');
    Route::get('realEstateMyProperty','realEstateMyProperty')->name('realEstateMyProperty');




// extra functions 
    Route::post('fetchCitiesOfaCountry','fetchCitiesOfaCountry')->name('fetchCitiesOfaCountry');                
    Route::post('fetchRegisteredPropertyFront','fetchRegisteredPropertyFront')->name('fetchRegisteredPropertyFront');                
    Route::post('showPostedProperty','showPostedProperty')->name('showPostedProperty');                
 
});

