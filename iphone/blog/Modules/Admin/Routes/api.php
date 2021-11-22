<?php
use \Illuminate\Support\Facades\Route;

//获取数据
Route::get('/index',"AdminController@index");
//新增数据
Route::post('/save',"AdminController@save");
//删除数据
Route::delete('/delete',"AdminController@delete");
//修改数据
Route::put('/update',"AdminController@update");
