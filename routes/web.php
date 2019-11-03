<?php

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

$locales = config('app.locales');

Route::get('/', function () {
    return redirect(app()->getLocale());
});

$allowedLanguages = sprintf('%s', implode('|', $locales));

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => $allowedLanguages],
    'middleware' => 'setlocale',
], function() {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('/categories', 'CategoriesController@index')->name('categories.index');
});
