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
// Route::get('/', function () {
//     return view('blog.master.master');
// });

// Auth::routes();

use Illuminate\Support\Facades\Auth;

Route::get('test', function () {
    // $data = App\Post::find(7)->newstype()->get()->toArray();
    // echo '<pre>';
    // print_r($news);
    // echo '</pre>';
    // return view('blog.admin.post');
    // $id = App\Post::last()->id->get;
    $types = DB::table('posts')->max('id')->get();
    return $$types;
});

//Trang chu
Route::get('/', 'HomeController@index_home')->name('home_home');

//Home
Route::group(['prefix' => 'home'], function () {
    Route::get('/news','HomeController@index_news')->name('home_news');
    Route::get('/sport','HomeController@index_sport')->name('home_sport');
    Route::get('/music','HomeController@index_music')->name('home_music');
    Route::get('/heathy','HomeController@index_heathy')->name('home_heathy');
});

//Chi tiet
Route::get('chitiet/{id}','ChitietController@index')->name('chitiet');

//Dang nhap
Route::get('dangnhap','HomeController@getdangnhap')->name('getdangnhap');
Route::post('dangnhap','HomeController@postdangnhap')->name('postdangnhap');

//Dangky
Route::get('dangky','HomeController@getdangky')->name('getdangky');
Route::post('dangky','HomeController@postdangky')->name('postdangky');

// Dang xuat

Route::get('logout',function(){
    Auth::logout();
    return redirect('/');
})->name('getdangxuat');


//admin
Route::resource('admin' , 'AdminController');
