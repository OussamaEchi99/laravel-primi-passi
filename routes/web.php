<?php

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
    $data = [
        'name' => 'Oussama',
        'lastname' => 'Echi',
        'class_mates' => [
            'Alberto Bisetti',
            'Nikolic Dejan',
            'Darius Coman',
            'Sebastian Lillo'
        ],
    ];

    return view('home', $data);
})->name('Homepage');

Route::get('/products', function () {
    return view('Products');
})->name('Products');

Route::get('/faqs', function () {
    return view('FAQs');
})->name('FAQs');

Route::get('/discounts', function () {
    return view('Discounts');
})->name('Discounts');

Route::get('/about_us', function () {
    return view('About_us');
})->name('About_us');

Route::get('/contacts', function () {
    return view('Contacts');
})->name('Contacts');

Route::get('/basket', function () {
    return view('Basket');
})->name('Basket');