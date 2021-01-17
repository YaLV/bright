<?php

declare(strict_types=1);

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

Auth::routes();

Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

Route::prefix('admin')->middleware('auth')->group(function () {
    // Calendar Routes
    Route::prefix('absence')->group(function () {
        Route::get('/', 'App\Http\Controllers\Absence\ListController@index')->name('admin.absence');

        Route::get('/create', 'App\Http\Controllers\Absence\CreateController@index')->name('admin.absence.create');
        Route::post('/create', 'App\Http\Controllers\Absence\CreateController@save')->name('admin.absence.create.save');

        Route::get('/edit/{item}', 'App\Http\Controllers\Absence\EditController@index')->name('admin.absence.edit');
        Route::post('/edit/{item}', 'App\Http\Controllers\Absence\EditController@save')->name('admin.absence.edit.save');

        Route::get('/remove/{item}', 'App\Http\Controllers\Absence\RemoveController@index')->name('admin.absence.remove');
    });

    // Twitter Routes
    Route::prefix('twitter')->group(function () {
        Route::get('/', 'App\Http\Controllers\Twitter\ListController@index')->name('admin.twitter');

        Route::get('/create', 'App\Http\Controllers\Twitter\CreateController@index')->name('admin.twitter.create');
        Route::post('/create', 'App\Http\Controllers\Twitter\CreateController@save')->name('admin.twitter.create.save');

        Route::get('/edit/{item}', 'App\Http\Controllers\Twitter\EditController@index')->name('admin.twitter.edit');
        Route::post('/edit/{item}', 'App\Http\Controllers\Twitter\EditController@save')->name('admin.twitter.edit.save');

        Route::get('/remove/{item}', 'App\Http\Controllers\Twitter\RemoveController@index')->name('admin.twitter.remove');
    });

    // Activities Routes
    Route::prefix('activities')->group(function () {
        Route::get('/', 'App\Http\Controllers\Activity\ListController@index')->name('admin.activities');

        Route::get('/create', 'App\Http\Controllers\Activity\CreateController@index')->name('admin.activities.create');
        Route::post('/create', 'App\Http\Controllers\Activity\CreateController@save')->name('admin.activities.create.save');

        Route::get('/edit/{item}', 'App\Http\Controllers\Activity\EditController@index')->name('admin.activities.edit');
        Route::post('/edit/{item}', 'App\Http\Controllers\Activity\EditController@save')->name('admin.activities.edit.save');

        Route::get('/remove/{item}', 'App\Http\Controllers\Activity\RemoveController@index')->name('admin.activities.remove');
    });

    // WorkData Routes
    Route::prefix('workdata')->group(function () {
        Route::get('/', 'App\Http\Controllers\WorkData\ListController@index')->name('admin.workdata');

        Route::get('/create', 'App\Http\Controllers\WorkData\CreateController@index')->name('admin.workdata.create');
        Route::post('/create', 'App\Http\Controllers\WorkData\CreateController@save')->name('admin.workdata.create.save');

        Route::get('/edit/{item}', 'App\Http\Controllers\WorkData\EditController@index')->name('admin.workdata.edit');
        Route::post('/edit/{item}', 'App\Http\Controllers\WorkData\EditController@save')->name('admin.workdata.edit.save');

        Route::get('/remove/{item}', 'App\Http\Controllers\WorkData\RemoveController@index')->name('admin.workdata.remove');
    });
});
