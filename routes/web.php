<?php

use App\Http\Controllers\BivaranController;
use App\Http\Controllers\JaggadartaController;
use App\Http\Controllers\KarasuliController;
use App\Http\Controllers\MulyankanController;
use App\Http\Controllers\PerosnalDetailController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/personalBivaran', PerosnalDetailController::class);
    Route::resource('personal_create', PerosnalDetailController::class);
    Route::resource('jagga_darta', JaggadartaController::class);
    Route::resource('/mulyakan', MulyankanController::class);
    Route::resource('karasuli', KarasuliController::class);
    Route::get("/personal-bivaran/load", [PerosnalDetailController::class, "loadDas"])->name("personalBiwaranLoad");
    Route::post("/personal-bivaran/dates", [PerosnalDetailController::class, "loadDataBetweenDate"])->name("loadDataBetweenDate");
    Route::get("/get-bill/{id}", [PerosnalDetailController::class, "getBill"])->name("getBill");
    Route::get('/personal-bivaran/{id}/get-bill', 'PerosnalDetailController@getBill')->name('personalBivaran.getBill');

    Route::get('/bill', function () {
        return view('admin.bill');                
    })->name("bill");

        // user
        Route::group(["middleware" => "admin"], function () {
            Route::get("/create-user", [UserController::class, "create"])->name("createUser");
            Route::get("/edit-user/{id}", [UserController::class, "edit"])->name("editUser");
            Route::patch("/update-user/{id}", [UserController::class, "update"])->name("updateUser");
            Route::post("/store-user", [UserController::class, "store"])->name("storeUser");
            Route::get("/delete-user/{id}", [UserController::class, "delete"])->name("deleteUser");
            Route::get("/user", [UserController::class, "index"])->name("allUser");
        });
});

require __DIR__ . '/auth.php';
