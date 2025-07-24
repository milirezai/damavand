<?php

use System\Router\Web\Route;

# تعریف مسیر ها پروژه
# get
 /*

 */ 
# post
 /*

 */ 
# put
 /*

 */ 
# delete
 /*

 */ 
# نحوه تعریف مسیر ها
 /*
Route::get('name مسیر','name کنتلرر @ name متد','name مسیر');
 */ 

 Route::get('','HomeController@index','index');
 Route::get('damavand','HomeController@damavand','damavand');
 Route::post('store','HomeController@store','store');
 Route::get('edit/{id}','HomeController@edit','edit');
 Route::put('/update/{id}','HomeController@update','update');
 Route::delete('delete/{id}','HomeController@destroy','delete');