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

Route::group(['middleware' => ['auth', 'confirmed.user']], function (){

    Route::get('/', function () {
        return view('index');
    })->name('index');

    Route::get('profile', 'ProfileController@index')->name('profile.index'); // Показать все профили
    Route::get('profile/{id}', 'ProfileController@show')->name('profile.show'); // Показать профиль
    Route::group(['middleware' => 'edit.profile'], function (){
        Route::get('profile/{id}/edit', 'ProfileController@edit')->name('profile.edit');  // Поместить профиль в форму для редактирования
        Route::patch('profile/{id}', 'ProfileController@update')->name('profile.update');   // Сохранение формы после отправки
    });

    Route::group(['middleware' => 'hr.only'], function (){
        Route::get('unconfirmed', 'ProfileController@newEmp')->name('profile.new'); // Показать новые профили, для подтверждения
    });

});

Route::get('success', ['middleware' => 'guest', function (){
    return view('auth.success');
}])->name('success');

Auth::routes();





