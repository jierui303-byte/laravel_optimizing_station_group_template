<?php

use Illuminate\Http\Request;

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


Route::post('/getPinYin', function (Request $request) {
    //获取传递过来的汉字
    $input=$request->all();  #获取所有参数
//    var_dump($input['address']);
    //getPinYin()是我封装在函数中的一个公共函数方法
    $pinyin = getPinYin($input['address']);
    return  $pinyin;
});