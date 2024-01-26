<?php

use App\Http\Controllers\SecurityController;
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

route::controller(SecurityController::class)->group(function (){
route::get('/','main')->name('main');
route::post('Data/Secured', 'success')->name('success');
route::get('success','check')->name('done');
});
