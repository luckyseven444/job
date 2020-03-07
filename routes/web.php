<?php

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
use App\Profile;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/circulars/create', 'CircularController@create')->middleware('auth', 'checkCompany');
Route::post('/circulars/store', 'CircularController@store')->middleware('auth', 'checkCompany');
Route::get('/profiles/create', 'ProfileController@create')->middleware('auth', 'checkApplicant');
Route::post('/profiles/store', 'ProfileController@store')->middleware('auth', 'checkApplicant');
Route::get('/apply/{circularId}', function ($circularId){
   if(Profile::where('user_id',Auth::id())->first()){
       DB::table('circular_user')->insert(
           ['circular_id' => $circularId, 'user_id' => Auth::id() ]
       );
   }else{
       Session::flash('alert-warning', 'Please add resume to your profile');
       return redirect('/profiles/create');
   }

})->name('apply');