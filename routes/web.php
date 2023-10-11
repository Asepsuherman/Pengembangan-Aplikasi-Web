<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SegiEmpatController;
use App\Http\Controllers\MstPangkatController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');




//New Line ========================
Route::get('webKu/', function (){
    return "Apa Kabar Asep Suherman";
});

//WebKu1
$logic = function()
{
 return 'Hello Apa kabhar Badiyanto..........!';
};
Route::get('webKu1', $logic);

Route::get('satu/page', function() {
    return 'Yang ke Satu!';
    });
    Route::get('dua/page', function() {
    return 'Yang ke Dua!';
    });
    Route::get('tiga/page', function() {
     return 'Anda Hebat.......!';
    }
);

Route::get('/buku/{judul}', function($judul) {
    return "Buku <b>{$judul}</b> termasuk dalam kategori buku komputer.";
});

Route::get('/produk/{kategori}/{id}', function($kategori, $id) {
    return "Produk dengan kategori <b>{$kategori}</b> dan ID <b>{$id}</b> ditemukan.";
});

Route::get('/coba', function()
    {
        return '<!doctype html>
                <html lang="en">
                <head>
                <meta charset="UTF-8">
                <title>Coba laravel!</title>
                </head>
                <body>
                <p>SELAMAT ANDA BELAJAR LARAVEL</p>
                </body>
                </html>';
});

// Route::get('/segi-empat/inputSegiEmpat', 'App\Http\Controllers\SegiEmpatController@inputSegiEmpat')
// ->name('segi-empat.inputSegiEmpat');

// Route::get('segi-empat/inputSegiEmpat',
//  'SegiEmpatController@inputSegiEmpat')
//  ->name('segi-empat.inputSegiEmpat');

// Route::post('segi-empat/hasil',
// 'SegiEmpatController@hasil')
//  ->name('segi-empat.hasil');

Route::get('segi-empat/inputSegiEmpat',
 'App\Http\Controllers\SegiEmpatController@inputSegiEmpat')
 ->name('segi-empat.inputSegiEmpat');

Route::post('segi-empat/hasil',
'App\Http\Controllers\SegiEmpatController@hasil')
 ->name('segi-empat.hasil');

 Route::get('segi-empat/inputBalok',
 'App\Http\Controllers\SegiEmpatController@inputBalok')
 ->name('segi-empat.inputBalok');

Route::post('segi-empat/hasilBalok',
 'App\Http\Controllers\SegiEmpatController@hasilBalok')
 ->name('segi-empat.hasilBalok');

 Route::resource('/mst-pangkat',MstPangkatController::class);