<?php
use Illuminate\Support\Facades\Route;
Route::get('/logout', 'SessionController@logout')->name('logout');
Route::get('/login', 'SessionController@login')->name('login');
Route::get('/dashboard', 'SessionController@dashboard')->name('dashboard');
Route::get('/getuserdetails', 'SessionController@userdetails')->name('getuserdetails');

Route::get('/{any}', 'HomeController@index')->where('any', '.*');

?>
