<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/contact',function(){
    return view('form',['title'=>'Contact Form']);
 });

 Route::post('/get-data',function(Request $request){
    $name = $request->input('name');
    $number = $request->input('number');
    $age = $request->input('age');
    return redirect('/contact')->with('message','form submit successfully');
 })->name('get-contactdata');

//  Route::get('/{id}',function(Request $id){
// return $id;
//  });
