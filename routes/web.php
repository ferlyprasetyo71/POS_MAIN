<?php
use App\Http\Controllers\HomePage;
use App\Http\Controllers\ProductsPage;
use App\Http\Controllers\SalesPage;
use App\Http\Controllers\UserPage;
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


Route::get('/hello', function () {
    return 'Hello World';
   });


Route::get('/world', function () {
    return 'World';
   });


Route::get('/Selamat', function () {
    return 'Selamat Datang';
   });


Route::get('/nama', function () {
    return 'Ferly Yanuar Prasetyo 2141762081';
   });


Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
    });


Route::get('/posts/{post}/comments/{comment}', function
    ($postId, $commentId) {
     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });

    
Route::get('/articles/{id}', function ($id) {
        return 'Halaman Artikel Dengan ID  '.$id;
        });


Route::get('/user/{name?}', function ($name='John') {
        return 'Nama saya '.$name;
});


Route::get('hello', function() {
    $hello = ['Hello World', 2 => ['Hello Jakarta', 'Hello Medan']];
    dd($hello);

    return $hello;
});


Route::get('/hello', function(){
     $hello = 'Hello World';
     var_dump($hello);
     die();

     return $hello;
});


Route::get('/mahasiswa', function(){
$arrMahasiswa = ["Ferly Yanuar P", "Bangkit Magulana C", "Rizqi Hendra", "Neddy Pratama"];

return view('Politeknik.Mahasiswa', ['mahasiswa' => $arrMahasiswa]);
});

Route::get('/dosen', function(){
    $arrDosen = ["Zawarudin", "Usman", "Budi Harijanto", "Bagas"];
    
    return view('Politeknik.dosen', ['dosen' => $arrDosen]);
    });

use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);

Route::get('/greeting', function () {
    return view('hello', ['name' => 'Ferly']);
    });

    Route::get('/greeting', function () {
        return view('blog.hello', ['name' => 'Andi']);
        });

        Route::get('/home', [HomePage::class, 'hello']);

        Route::get('/products', [ProductsPage::class, 'products']);
        
        Route::get('/category/food-beverage', [ProductsPage::class, 'food_beverage']);
        
        Route::get('/category/beauty-health', [ProductsPage::class, 'beauty_health']);
        
        Route::get('/category/home-care', [ProductsPage::class, 'home_care']);
        
        Route::get('/category/baby-kid', [ProductsPage::class, 'baby_kid']);
        
        Route::get('/user/{id?}/name/{name?}', [UserPage::class, 'user']);
        
        Route::get('/sales', [SalesPage::class, 'sales']);
        
    
    
    