<?php

use App\Notifications\Callback;
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

Route::view('/', 'home')->name('home');
Route::view('about', 'about')->name('about');
Route::view('certificates', 'certificates')->name('certificates');
Route::view('our-projects', 'our-projects')->name('our-projects');
Route::view('additional-products', 'additional-products')->name('additional-products');
Route::get('mail', function () {
    return (new Callback(['name' => 'Dima', 'phone' => '+380990359634', 'comment' => 'comment text']))
        ->toMail('dkravackij@gmail.com');
});
