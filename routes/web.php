<?php

use App\Http\Controllers\Team\TeamController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


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
    return view('welcome');
});

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});


// Backend start

Route::prefix('/')->group(function(){
    Route::get('/dashboard', function () {
        return view('admin.layout.app');
    })->name('app');

    Route::controller(TeamController::class)->group(function () {
        Route::get('/team/', 'index_member')->name('team-member-index');
        Route::get('/team/create', 'create_member')->name('team-member-create');
        Route::post('/team/create', 'store_member')->name('team-store_member');
        // Route::get('/team/edit/{id}', 'edit')->name('u-edit');
        // Route::put('/user/edit', 'update')->name('u-update');
        // Route::delete('/user/delete/{id}', 'delete')->name('u-delete');
        // Route::post('/user/isactive/{id}', 'is_active');

    });

});

// Backend end
