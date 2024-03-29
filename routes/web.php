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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('components.home');
});
Route::get('/about', function () {
    return view('components.about');
});
Route::get('/blog', function () {
    return view('components.blog');
});
Route::get('/contact', function () {
    return view('components.contact');
});
Route::get('/login', function () {
    return view('components.login');
});
Route::get('/register', function () {
    return view('components.register');
});
Route::get('/checkout', function () {
    return view('components.checkout');
});
//...

Route::get('/my-message', function () {

return view('my-template');

});

//...


