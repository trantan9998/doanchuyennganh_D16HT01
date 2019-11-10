
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


//Route::get('', 'HomeController@congviec');
Route::get('/','HomeController@duan');
//Route::get('/','HomeController@postbai');

Route::get('duan','HomeController@duan');
Route::get('congviec','Homecontroller@congviec');
Route::get('postbai','HomeController@postbai');
