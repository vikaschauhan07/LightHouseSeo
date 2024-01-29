<?php

use App\Http\Controllers\TestFirst;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::any('getLightHouseResults', 'App\Http\Controllers\LightHouseResultController@getLightHouseResults')->name('getLightHouseResults');
Route::get('/', 'App\Http\Controllers\LightHouseResultController@index');
Route::any('getLightHouseResults-show', 'App\Http\Controllers\LightHouseResultController@getLightHouseResultsShow')->name('getLightHouseResults-show');

Route::get('/new', 'App\Http\Controllers\LightHouseResultController@newPage');
Route::post('/new', 'App\Http\Controllers\LightHouseResultController@newAdsAdd')->name('addAds');

Route::get('/new-ad', 'App\Http\Controllers\LightHouseResultController@getAds')->name('getAds');

Route::get('/sat', [AttendanceController::class, 'index']);
Route::post('/add-attendance', [AttendanceController::class, 'addPersons'])->name('addPersons');
Route::get('/get-attendance', [AttendanceController::class, 'markAttandence'])->name('markAttandence');
Route::get('/send-mail', [AttendanceController::class, 'sendAttandenceMail'])->name('sendmail');
Route::get('/reset-all', [AttendanceController::class, 'resetAll'])->name('resetall');
Route::get('/delete-person/{id}', [AttendanceController::class, 'deletePerson'])->name('delete-person');










