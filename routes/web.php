<?php

use Illuminate\Support\Facades\DB;
///use App\Events\StatusLiked;
//use Pusher\Laravel\Facades\Pusher;
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
   /* if (DB::connection()->getDatabaseName()) {
        echo "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
    }
*/
    return view('welcome');
});

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('email', 'EmailController@sendEmail')->name('email');
Route::get('geo-details', 'HomeController@geo')->name('geo');

Route::post('comment', 'HomeController@comment')->name('comment');


Route::post('like', function () {
   /*event(new StatusLiked('Someone'));*/
//  Pusher::trigger('my-channel', 'status-liked', ['message' => "Someone liked your status"]);  
 // return redirect('/feed');
})->name('liked');

Route::view('/feed', 'feed');