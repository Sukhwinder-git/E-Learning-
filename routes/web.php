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


// Controller Of Tutorials

Route::get('/','TutorialsController@Home')->name('head'); 
Route::get('/Learn-Html','TutorialsController@Html')->name('html')->middleware('auth');
Route::get('/Learn-Css','TutorialsController@Css')->name('css')->middleware('auth');
Route::get('/Learn-Bootstrap', 'TutorialsController@Bootstrap')->name('bootstrap')->middleware('auth');
Route::get('/Learn-Php', 'TutorialsController@Php')->name('php')->middleware('auth');
Route::get('/Learn-Jquery', 'TutorialsController@Jquery')->name('jquery')->middleware('auth');
Route::get('/Learn-Laravel', 'TutorialsController@Laravel')->name('laravel')->middleware('auth');

// Controller Of Footer

Route::get('/privacy','FooterController@privacy' );
Route::get('/contact_us','FooterController@contact_us' ); 
Route::post('/contact_us','FooterController@contact_upload' );
Route::get('/about_us','FooterController@about_us'  );
Route::get('/Terms_and_condition','FooterController@Terms_and_condition' ); 

// Controller Of Authentication

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/change-password', 'Auth\changepasswordcontroller@index')->name('password.change');
Route::post('/change-password', 'Auth\changepasswordcontroller@changepassword')->name('password.update');

//Admin Dashboard  Controller

Route::group([ 'as' => 'admin.','prefix' => 'admin' , 'namespace' => 'Admin' , 'middleware' => ['auth','admin']],
function(){
Route::get('dashboard','DashboardController@index')->name('dashboard');
Route::get('dashboard','DashboardController@show')->name('dashboard');
Route::get('dashboard/contact_us','DashboardController@contact_us')->name('contact_us');
Route::get('dashboard/Html','DashboardController@Html')->name('Html');
Route::post('dashboard/Html','DashboardController@Html_upload')->name('Html_upload');
Route::delete('dashboard/Html/{id}','DashboardController@Html_delete')->name('Html_delete');
Route::get('dashboard/Css','DashboardController@Css')->name('Css');
Route::post('dashboard/Css','DashboardController@Css_upload')->name('Css_upload');
Route::delete('dashboard/Css/{id}','DashboardController@Css_delete')->name('Css_delete');
Route::get('dashboard/Bootstrap','DashboardController@Bootstrap')->name('Bootstrap');
Route::post('dashboard/Bootstrap','DashboardController@Bootstrap_upload')->name('Bootstrap_upload');
Route::delete('dashboard/Bootstrap/{id}','DashboardController@Bootstrap_delete')->name('Bootstrap_delete');
Route::get('dashboard/Php','DashboardController@php')->name('Php');
Route::post('dashboard/Php','DashboardController@Php_upload')->name('Php_upload');
Route::delete('dashboard/Php/{id}','DashboardController@Php_delete')->name('Php_delete');
Route::get('dashboard/Jquery','DashboardController@Jquery')->name('Jquery');
Route::post('dashboard/Jquery','DashboardController@Jquery_upload')->name('Jquery_upload');
Route::delete('dashboard/Jquery/{id}','DashboardController@Jquery_delete')->name('Jquery_delete');
Route::get('dashboard/Laravel','DashboardController@Laravel')->name('Laravel');
Route::post('dashboard/Laravel','DashboardController@Laravel_upload')->name('Laravel_upload');
Route::delete('dashboard/Laravel/{id}','DashboardController@Laravel_delete')->name('Laravel_delete');
Route::get('dashboard/Post_queries','DashboardController@Queries')->name('Queries');
Route::post('dashboard/Post_queries','DashboardController@Post_queries')->name('Post_queries');
Route::delete('dashboard/Post_queries/{id}','DashboardController@Post_queries_delete')->name('Post_queries_delete');
}); 


//Author Dashboard  Controller
Route::group([ 'as' => 'author.','prefix' => 'author' , 'namespace' => 'Author' , 'middleware' => ['auth','author']],
function(){
Route::get('dashboard','DashboardController@index')->name('dashboard');

}); 







