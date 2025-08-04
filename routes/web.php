<?php

use Illuminate\Support\Facades\Route;

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

/*membuat Route*/
Route::get('/hello', function () {
 return 'Hello World';
 });

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang Belajar Laravel</p>';
});

Route::get('/mahasiswa/fasilkom/anto', function() {
    echo '<h2 style="text-align: center"><u>Welcome Anto</u></h2>';
});


/*Route Parameter*/
Route::get('/mahasiswa/{nama}', function($nama) {
    return "Tampilkan data mahasiswa bernama $nama";
});

Route::get('barang/{jenis}/{merek}', function($jenis, $merek) {
    return "Cek sisa stok untuk $jenis $merek";
});

/*Route Parameter dengan Regular Expression*/
Route::get('user/{id}', function($id) {
    return "Tampilkan user dengan id $id";
})->where    ('id', '[A-Z]{2}[0-9]+');

Route::get('hubungi-kami', function () {
    return '<h1>hubungi kami</h1>';
});

Route::redirect('/contact-us', '/hubungi-kami');

/*Route Group*/
Route::prefix('/admin')->group(function () {
    
    Route::get('/murid', function () {
        echo "<h1>Daftar Mahasiswa</h1>";
    });

    Route::get('/dosen', function () {
        echo "<h1>Daftar Dosen</h1>";
    });

    Route::get('/karyawan', function () {
        echo "<h1>Daftar Karyawan</h1>";
    });  
});

/*Route Fallback*/
Route::fallback(function() {
    return "Nyari apaa?";
});

/*Pencarian Kesalahan (Debugging)*/
Route::get('hello', function () {
    $hello = 'Hello Wolrd';
    var_dump($hello);
    die();
    
    return $hello;
});
