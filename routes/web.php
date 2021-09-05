<?php
use Spatie\Sitemap\SitemapGenerator;
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
})->name("home");

Route::get('/views/homepage.php', function () {
    return view('homepage');
});

Route::get('/galery', function () {
    return view('galery');
})->name('galery');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/gallery_coctail', function () {
    return view('gallery_coctail');
})->name('gallery_coctail');

Route::get('/gallery_shisha', function () {
    return view('gallery_shisha');
})->name('gallery_shisha');

Route::get('/book_table', function () {
    return view('book_table');
})->name('book_table');

Route::get('/venue', function () {
    return view('venue');
})->name('venue');
Route::get('/about_us', function () {
    return view('about_us');
})->name('about_us');

Route::post('/reserve_table',"Reservetion@book_table");

Route::get('sitemap',function(){
    SitemapGenerator::create('http://blog/')->writeToFile('sitemap.xml');
return 'sitemap created';
});

Route::get('/reservation_list/{token}',"Reservetion@reservation_list")->name('reservation.list');
Route::get('/reservation_list_pending/{token}',"Reservetion@reservation_list_pending")->name('reservation.list.pending');
Route::get('/reservation_list_confirmed/{token}',"Reservetion@reservation_list_confirmed")->name('reservation.list.confirmed');
Route::get('/reservation_list_canceled/{token}',"Reservetion@reservation_list_canceled")->name('reservation.list.canceled');
Route::get('/reservation_list_venue/{token}',"Reservetion@reservation_list_venue")->name('reservation.list.venue');
Route::get('/error_permission',"Reservetion@error_permission")->name('reservation.error.permission');
Route::post('/reservation_confirm/{id}',"Reservetion@reservation_confirm")->name('reservation.confirm');
Route::post('/reservation_cancel/{id}',"Reservetion@reservation_cancel")->name('reservation.cancel');