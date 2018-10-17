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
    //��ȡ���ݹ����ĺ���
    $input=$request->all();  #��ȡ���в���
//    var_dump($input['address']);
    //getPinYin()���ҷ�װ�ں����е�һ��������������
    $pinyin = getPinYin($input['address']);
    return  $pinyin;
});