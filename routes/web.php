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

use Illuminate\Http\Request;



Route::get('/', function () {
    return view('main');
});

Auth::routes();



Route::get('/main','MainController@index')->name('main');

Route::get('/mainAfterContact','MainAfterContactController@index')->name('mainAfterContact');

Route::get('/about','AboutController@index')->name('about');

Route::get('/faq','FAQController@index')->name('faq');

Route::get('/ask','AskController@index')->name('ask');

Route::get('/userProfile','userProfileController@index')->name('userProfile');

/*Route::get('/home', ['middleware' => 'auth', function () {
    return view('/auth/register');
}]);*/

Route::get('/auth/register',function(){
    return view('/auth/register');
})->name('regUser');
//FIXME zabezpiecz to anomalia przy rejestracji

Route::get('/auth/login',function(){
    return view('/auth/login');
})->name('loginUser');


Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin');
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration');
Route::get('dashboard', 'AuthController@dashboard');
Route::get('logout', 'AuthController@logout');



Route::post('/ask',function(Request $request){
    Mail::send(new \App\Mail\ContactMail($request));
    return redirect('mainAfterContact');
});

Route::get('newPost', 'ImageController@index')->name('newPost');
Route::get('save', 'ImageController@store')->name('save');
Route::post('save', 'ImageController@store')->name('save');

Route::get('userPosts', 'UserPostsController@index')->name('userPosts');

Route::post('delete', 'UserPostsController@delete')->name('delete');
Route::post('public', 'UserPostsController@public')->name('public');
Route::post('privata', 'UserPostsController@privata')->name('privata');
Route::post('edit', 'EditPostController@index')->name('edit');
Route::post('editAfter', 'EditPostAfterController@editTitle')->name('editAfter');

Route::post('search', 'SearchController@index')->name('search');




