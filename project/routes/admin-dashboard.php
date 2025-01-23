<?php 

use App\Http\Controllers\Backend\CategoriesController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Categoreis Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group([
    'middleware' => ['auth', 'verified'],
    'prefix' => 'dashboard',
    'as' => 'dashboard.'
], function() {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('/categories', CategoriesController::class);
});