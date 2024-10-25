<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\register;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccountDetails;
use App\Http\Controllers\AddToCart;
use App\Http\Controllers\DirectoryController;

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\vendorData;
use App\Http\Controllers\ReadMore;


use App\Http\Controllers\your_order_controller;


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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/register', [HomeController::class, 'register'])->name('register');

Route::get('/admin_dashboard', [LoginController::class, 'admin_dashboard'])->name('admin_dashboard');


Route::get('/login', [HomeController::class, 'login'])->name('login');


// logout form dashboard

Route::get('/logout', function () {
    session()->forget('user');
    return redirect()->route('index');
})->name('logout');

Route::get('/directoryadd', [HomeController::class, 'directoryadd'])->name('directoryadd');
Route::post('/register', [register::class, 'store']);

Route::post('/login', [LoginController::class, 'login'])->name('login');


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// Route::get('/edit-account', [HomeController::class, 'edit_account'])->name('edit-account');
Route::get('/edit-account', [App\Http\Controllers\AccountDetails::class, 'edit_account'])->name('edit-account');

// Route::post('/update-account', [AccountDetails::class, 'updateAccount'])->name('update-account');

// Route to show account details page
Route::get('/account-details', [AccountDetails::class, 'showAccountDetails'])->name('account-details');





// Route to handle the update of account details
Route::post('/update-account', [App\Http\Controllers\AccountDetails::class, 'updateAccount'])->name('update-account');


Route::get('/directory', [DirectoryController::class, 'directory'])->name('directory');


Route::post('/directory_store', [DirectoryController::class, 'directory_store'])->name('directory_store');



Route::get('/directory_show_all', [DirectoryController::class, 'showAll'])->name('directory_show_all');

Route::post('/directory_search', [DirectoryController::class, 'directory_search'])->name('directory_search');


//  Route::post('/directory_search', [DirectoryController::class, 'search_bytext'])->name('directory_search');

Route::get('/search_bytext', [DirectoryController::class, 'search_bytext'])->name('search_bytext');

Route::get('/admin_listing', [DirectoryController::class, 'Directotylisting'])->name('admin_listing');




Route::get('/your_order', [your_order_controller::class, 'your_order'])->name('your_order');


//  vendor
Route::get('/vendor_data', [vendorData::class, 'showAll_data'])->name('vendor_data');

Route::delete('/vendor_data/{id}', [vendorData::class, 'delete'])->name('vendor_data.delete');

Route::delete('admin_listing/{id}', [DirectoryController::class, 'delete'])->name('admin_listing.delete');







Route::get('/readmore/{id}', [ReadMore::class, 'readmore'])->name('readmore');
// Customizable uniform page  routing
Route::get('/basketball', [HomeController::class, 'basketball'])->name('basketball');

Route::get('/cricket', [HomeController::class, 'cricket'])->name('cricket');

Route::get('/soccer', [HomeController::class, 'soccer'])->name('soccer');



Route::post('/add-to-cart}', [AddToCart::class, 'addToCart'])->name('add_to_cart');
// Route::get('/addToCart_get}', [AddToCart::class, 'addToCart_get'])->name('add_to_cart');
Route::get('/checkout}', [AddToCart::class, 'checkout'])->name('checkout');

// for payment
Route::get('/payment', [PaymentController::class, 'showPaymentForm'])->name('payment.form');
Route::post('/create-payment-intent', [PaymentController::class, 'createPaymentIntent'])->name('create-payment-intent');
// Store custome product data 
Route::post('/store-custom-product', [PaymentController::class, 'storeCustomProduct'])->name('store-custom-product');

// download directory xlsx format
Route::get('/downloadxlsx', [DirectoryController::class, 'downloadxlsx'])->name('downloadxlsx');
// upload  directory xlsx format
Route::post('/directory/upload', [DirectoryController::class, 'upload'])->name('directory.upload');
