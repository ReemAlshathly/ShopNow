<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('front.index');
});
Route::get('/detials', function () {
    return view('front.detials');
});
Route::get('/categories', function () {
    return view('front.category');
});
// Route::get('/admincategories', function () {
//     return view('back.admin.categories');
// });
Route::get('/supercategories', function () {
    return view('back.admin.superCategories');
});
Route::resource('/admincategories', CategoryController::class, ['names' => 'admin.category']);
