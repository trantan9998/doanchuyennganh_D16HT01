
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

use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@congviec');
Route::get('/','HomeController@duan');
Route::get('/','HomeController@postbai');
Route::get('/','HomeController@doan');

Route::get('duan','HomeController@duan');
Route::get('congviec','Homecontroller@congviec');
Route::get('postbai','HomeController@postbai');
Route::get('quanly','HomeController@quanly');

//Route::get('doan','HomeController@duan');
//Route::get('/','HomeController@quanly');

//Route::get('/', function () {
//    return view('index');
//});
//Route::get('list',['uses' => 'DuAnController@getList']);
//Route::post('add',['uses' => 'DuAnController@getAdd']);
//Route::get('edit/{id}',['uses' => 'DuAnController@getEdit']);
//Route::post('edit/{id}',['uses' => 'DuAnController@postEdit']);
//Route::get('delete/{id}',['uses' => 'DuAnController@getDelete']);
