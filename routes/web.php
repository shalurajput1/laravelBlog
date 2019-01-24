<?php
use App\user;
use Illuminate\Notifications\Taskcompleted;
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
	//User::find(1)->notify(new Taskcompleted);
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post', 'PostController@post');
Route::get('/profile', 'ProfileController@profile');
Route::get('/category', 'CategoryController@category');
Route::get('/compare_files', 'CategoryController@compareFiles');
Route::get('/compare_directories', 'CategoryController@files');
Route::post('/addCategory', 'CategoryController@addCategory');

Route::post('/addProfile', 'ProfileController@addProfile');

Route::post('/addPost', 'PostController@addPost');

Route::get('/view/{id}', 'PostController@view');

Route::get('/edit/{id}', 'PostController@edit');

