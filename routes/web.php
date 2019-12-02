
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

//Route::get('/', function () {
//    return view('welcome');
//});
//use App\Http\Controllers\HomeController;
//use Illuminate\Routing\Route;
//
//Route::get('/', 'HomeController@postbai');
//use Illuminate\Routing\Route;

//Route::get('/','HomeController@index');

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@congviec');
Route::get('/','HomeController@duan');
Route::get('/','HomeController@postbai');
Route::get('/','HomeController@doan');
//Route::get('/','HomeController@home');
//Route::get ('/','HomeController@home');
//Route::get ('/','HomeController@login');
//Route::get('/','HomeController@aa');

Route::get('duan','HomeController@duan');
Route::get('congviec','Homecontroller@congviec');
Route::get('postbai','HomeController@postbai');
Route::get('quanly','HomeController@quanlyduan');
Route::get('qlthanhvien','HomeController@quanlythanhvien');
Route::get('baocaoduan','HomeController@baocaoduan');
Route::get('dangnhap','HomeController@dangnhap');
//Route::get('/','HomeController@dangky');

//Route::post('/','HomeController@home');
//Route::get('/login','HomeController@login');
//Route::get('/register','HomeController@register');
//Route::get('/logout','HomeController@logout');
//Route::get('doan','HomeController@duan');
//Route::get('/','HomeController@quanly');

// QUẢN LÝ VỀ DỰ ÁN CỦA THÀNH VIÊN
Route::get('list',['uses' => 'DuAnController@getList']);
Route::post('add',['uses' => 'DuAnController@getAdd']);
Route::get('edit/{id}',['uses' => 'DuAnController@getEdit']);
Route::post('edit/{id}',['uses' => 'DuAnController@postEdit']);
Route::get('delete/{id}',['uses' => 'DuAnController@getDelete']);


//QUẢN LÝ THÀNH VIÊN
Route::get('listregister',['uses' => 'registerController@getListregister']);
Route::post('addregister',['uses' => 'registerController@getAddregister']);
Route::get('editregister/{id}',['uses' => 'registerController@getEditregister']);
Route::post('editregister/{id}',['uses' => 'registerController@postEditregister']);
Route::get('deleteregister/{id}',['uses' => 'registerController@getDeleteregister']);
Route::get('reader/{id}',['users'=>'HomeController@dangnhap']);

//đăng nhập thành viên
