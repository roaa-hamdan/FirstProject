<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistationCon;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/getdataa',[RegistationCon::class,'getdata']);

Route::get('userL', [RegistationCon::class,'saveData']);
Route::get('updateData/{id}', [RegistationCon::class,'updateDataa']);
Route::get('Save/{i}/{j}/{k}/{b}', [RegistationCon::class,'create']);