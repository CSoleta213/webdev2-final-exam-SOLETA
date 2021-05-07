<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BSRequestsController;

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
    return view('welcome');
});

Route::get('/bible-study-requests', [BSRequestsController::class, 'showBSRequests']);

Route::post('/thank-you', [BSRequestsController::class, 'getBSRequest']);

Route::get('/user', [UserController::class, 'index']);

Route::get('/bible-study-request-form', function () {
    return view('form');
});
