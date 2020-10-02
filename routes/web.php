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

Route::get('/', function () {  return view('auth.login'); })->middleware('guest');

//Auth::routes();


Auth::routes([
    'reset'    => false,
    'verify'   => false,
    'register' => false,
  ]);

Route::get('/home', 'HomeController@index')->name('home');

//ticket routes
Route::get('new-ticket','TicketsController@create');
Route::post('new-ticket','TicketsController@store');
Route::get('my_tickets','TicketsController@userTickets');
Route::get('tickets/{ticket_id}','TicketsController@show');

//comment routes
Route::post('comment','CommentsController@postComment');
Route::get('/view/picture/{id}','CommentsController@ViewPicture'); 

//admin routes
Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
           
         Route::get('tickets','TicketsController@index')->name('all.tickets');
         Route::post('close_ticket/{ticket_id}','TicketsController@close');
         Route::post('new-campus','CampusController@create');
         Route::get('delete/campus/{id}','CampusController@delete');
         Route::get('delete/category/{id}','CategoryController@delete');
         Route::get('edit/category/{id}','CategoryController@Edit');
         Route::get('campus/tickets','TicketsController@campustickets');
         Route::post('update/category','CategoryController@categoryupdate')->name('update.category');
         Route::post('new-category','CategoryController@create');
         Route::get('edit/campus/{id}','CampusController@Edit');
         Route::post('update/campus','CampusController@campusupdate')->name('update.campus');
         Route::post('/assign/ticket','TicketsController@assign');

});
         

