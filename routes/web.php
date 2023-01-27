<?php
 
use App\Http\Controllers\ContactController; 
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
 
// rota para apresentar o template do email
// Route::controller(ContactController::class)->group(function (){
//     Route::group(['prefix' => 'email'], function () {
//     Route::get('', "email");
//     });
// }); 

// rota para apresentar o template do email
// Route::controller(ContactController::class)->group(function (){
//     Route::group(['prefix' => 'project'], function () {
//     Route::get('', "project");
//     });
// }); 

// rota principal para envio de email
// Route::resource('/', ContactController::class);   