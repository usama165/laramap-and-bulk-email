<?php

use App\Events\SendLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('last', function () {
    return view('front');
});

Route::get('fetch', 'fetchController@index')->name('fetch');
Route::post('test', 'fetchController@store');
Route::put('hithere/{id}', 'fetchController@update');
Route::delete('deleteteam/{id}', 'fetchController@delete');

Route::get('des', 'designationController@index')->name('designation');
Route::post('test1', 'designationController@store');
Route::put('edit1/{id}', 'designationController@update');
Route::delete('delete1/{id}', 'designationController@delete');

Route::get('pre', 'privilageController@index')->name('privilage');
Route::post('test3', 'privilageController@store');
Route::put('edit3/{id}', 'privilageController@update');
Route::delete('delete3/{id}', 'privilageController@delete');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['middleware'=>['auth','admin']],function(){
//     Route::get('/dash', function () {
//         return view('admin.dash');
//     });

// });

Route::post('/map', function (Request $request) {
    $lat = $request->input('lat');
    $long = $request->input('long');
    $location = ["lat" => $lat, "long" => $long];
    event(new SendLocation($location));
    return response()->json(['status' => 'success', 'data' => $location]);
});

// Route::get('log','matchController@index');
// Route::post('in','matchController@store');
// Route::put('form/{id}','matchController@update');

Route::get('map', 'mapController@index');

Route::get('app', ' DesignationController@index');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('dash', 'AdminController@dashboard')->name('dash1');

Route::get('icons', 'AdminController@icons')->name('icons');

Route::get('maps', 'AdminController@maps')->name('maps');

Route::get('notifications', 'AdminController@notifications')->name('notifications');

Route::get('table', 'AdminController@table')->name('table');

Route::get('typography', 'AdminController@typography')->name('typography');

Route::get('user', 'AdminController@user')->name('user');

Route::get('dash21', 'AdminController@database');

Route::get('contact us', 'AdminController@contactus')->name('contact us');

Route::get('teams', 'teamsController@index')->name('teams');

Route::post('insertintoteam', 'teamsController@store')->name('insertintoteam');

Route::post('deletefromteam', 'teamsController@delete')->name('deletefromteam');

Route::post('updateintoteam', 'teamsController@update')->name('updateintoteam');

Route::get('modal', 'modalController@index')->name('modal');

Route::post('addteam', 'modalController@store');

Route::get('subadmin', 'Controller@index')->name('subadmin');
Route::post('test', 'testController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/import', 'TestController@importFile');
Route::post('/import', 'TestController@importExcel');
// Route::get('/import', 'TestController@send');
//Route::get('click','subadminController@store');

// Route::get('admin','subadminController@index')->name('admin');
// //Route::get('send','subadminController@send');
// Route::post('subadminadd','subadminController@store');
// Route::put('hithere/{id}','subadminController@update');
// Route::delete('deleteteam/{id}','subController@delete');

//Route::get('send-email','MailSend@mailsend');
// Route::get('/send', function () {
//     $to_name = 'usama shaikh';
//     $to_email = "usamasheikh833@gmail.com";
//     $data = array('name' => 'peter', 'body' => 'test mail like');
//     Mail::send('mail', $data, function ($message) use ($to_name, $to_email) {
//         $message->to($to_email)
//             ->subject('Web Testing mail');
//     });
//     echo 'email has been sent';
// });
Route::get('send', 'MailController@send');