<?php

use App\Http\Controllers\apidatacontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dataController;
use App\Http\Controllers\StudentController;


Route::get('/',[StudentController::class,'list'])->name('student#list');
Route::get('studentadd',[StudentController::class,'create']);
Route::get('save',[StudentController::class,'save'])->name('student#store');
Route::get('stududentedit/{id}',[StudentController::class,'edit'])->name('student#update');
Route::get('studentupdate/{id}',[StudentController::class,'update']);
Route::get('studentdelete/{id}',[StudentController::class,'delete'])->name('student#delete');
Route::get('download',[StudentController::class,'downloadCSV'])->name('data#download');
Route::get('search',[StudentController::class,'search'])->name('st#search');

Route::get('list',[dataController::class,'list'])->name('std#list');
Route::get('add',[dataController::class,'create']);
Route::get('create',[dataController::class,'store'])->name('std#store');
Route::get('edit/{id}',[dataController::class,'edit'])->name('std#update');
Route::get('update/{id}',[dataController::class,'update']);
Route::get('list/{id}',[dataController::class,'delete'])->name('std#delete');
Route::get('upload',[dataController::class,'downloadCSV'])->name('data#upload');
Route::get('datasearch',[dataController::class,'search'])->name('data#search');


Route::get('/api/list',function(){
 return view('api.datalist');
});

Route::get('/api/adddata',function(){
return view('api.dataadd');
});
Route::get('api/edit/{id}',function(){
return view('api.edit');
});

