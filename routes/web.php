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

Route::get('/', [
    'uses' => '\App\Http\Controllers\HomeController@index',
    'as' => 'home',
]);


/*
* Authintication
*/
Route::get('resetPassword/{token}', ['as' => 'resetPassword', function($token)
{
   return View::make('resetPassword')->with('token', $token);
}]);


Route::get('/signup', [
    'uses' => '\App\Http\Controllers\AuthController@getSignup',
    'as' => 'auth.signup',
    'middleware' => ['guest'],
]);


Route::post('/signup', [
    'uses' => '\App\Http\Controllers\AuthController@postSignup',
    'middleware' => ['guest'],
]);



Route::get('/signin', [
    'uses' => '\App\Http\Controllers\AuthController@getSignin',
    'as' => 'auth.signin',
    'middleware' => ['guest'],
]);


Route::post('/signin', [
    'uses' => '\App\Http\Controllers\AuthController@postSignin',
    'middleware' => ['guest'],
]);

Route::get('/signout', [
    'uses' => '\App\Http\Controllers\AuthController@getSignout',
    'as' => 'auth.signout'
]);



/*
* Alert-Test
*/

Route::get('/alert', function () {
    return redirect()->route('home')->with('info', 'You have been signed up');
});



/*
* Search
*/

Route::get('/search', [
    'uses' => '\App\Http\Controllers\SearchController@getResults',
    'as' => 'search.results'
]);



/*
* User Profile
*/

Route::get('/user/{username}', [
    'uses' => '\App\Http\Controllers\ProfileController@getProfile',
    'as' => 'profile.index'
]);

Route::get('/profile/edit', [
	    'uses' => '\App\Http\Controllers\ProfileController@getEdit',
    'as' => 'profile.edit',
    'middleware' => ['auth'],
]);

Route::post('/profile/edit', [
	    'uses' => '\App\Http\Controllers\ProfileController@postEdit',
    	'middleware' => ['auth'],
]);



Route::post('/profile/imgupdate', [
	    'uses' => '\App\Http\Controllers\UploadController@postUpdate',
    	'middleware' => ['auth'],
    	'as' => 'update.post',
]);





/*
* Friends
*/

Route::get('/friends', [
	    'uses' => '\App\Http\Controllers\FriendController@getIndex',
    'as' => 'friend.index',
    'middleware' => ['auth'],
]);

Route::get('/friends/add/{username}', [
	    'uses' => '\App\Http\Controllers\FriendController@getAdd',
    'as' => 'friend.add',
    'middleware' => ['auth'],
]);


Route::get('/friends/accept/{username}', [
	    'uses' => '\App\Http\Controllers\FriendController@getAccept',
    'as' => 'friend.accept',
    'middleware' => ['auth'],
]);

Route::post('/friends/delete/{username}', [
	    'uses' => '\App\Http\Controllers\FriendController@postDelete',
    'as' => 'friend.delete',
    'middleware' => ['auth'],
]);


/*
* Statuses
*/

Route::post('/status', [
	    'uses' => '\App\Http\Controllers\StatusController@postStatus',
	    'as' => 'status.post',
    	'middleware' => ['auth'],
]);


Route::post('/status/{statusId}/reply', [
	    'uses' => '\App\Http\Controllers\StatusController@postReply',
	    'as' => 'status.reply',
    	'middleware' => ['auth'],
]);

Route::get('/status/{statusId}/like', [
	    'uses' => '\App\Http\Controllers\StatusController@getLike',
	    'as' => 'status.like',
    	'middleware' => ['auth'],
]);


/*
* QRCode
*/

Route::get('/QRCode', [
	    'uses' => '\App\Http\Controllers\QRCodeController@getQRCode',
	    'as' => 'QRCode.index',

]);



/*
* LanguageViews
*/

Route::get('/en', [
	    'uses' => '\App\Http\Controllers\EnController@getEn',
	    'as' => 'en.index',

]);



Route::get('/ar', [
	    'uses' => '\App\Http\Controllers\ArController@getAr',
	    'as' => 'ar.index',

]);




/*
* Links
*/




/*
* Uploads
*/


Route::post('/upload', [
	    'uses' => '\App\Http\Controllers\UploadController@postUpload',
	    'as' => 'upload.post',
    	'middleware' => ['auth'],
]);



/*
* Views
*/


Route::get('/dashboard', [
	    'uses' => '\App\Http\Controllers\DashboardController@getIndex',
	    'as' => 'dashboard.index',
    	'middleware' => ['auth'],
]);
