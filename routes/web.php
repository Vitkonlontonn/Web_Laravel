<?php

use Illuminate\Support\Facades\Route;


//Nhóm các route thành 1 nhóm
//prefix: chung tiền tố ở url
//as: chung phần đầu của name Route

//Route::group(['prefix' => 'course', 'as' => 'course.'], function () {
//    Route::get('/', [\App\Http\Controllers\CourseController::class, 'index'])->name('index');
//    Route::get('/create', [\App\Http\Controllers\CourseController::class, 'create'])->name('create');
//    Route::post('/create', [\App\Http\Controllers\CourseController::class, 'store'])->name('store');
//    Route::delete('/destroy/{course}', [\App\Http\Controllers\CourseController::class, 'destroy'])->name('destroy');
//    Route::get('/edit/{course}', [\App\Http\Controllers\CourseController::class, 'edit'])->name('edit');
//    Route::put('/edit/{course}', [\App\Http\Controllers\CourseController::class, 'update'])->name('update');
//
//});

//Cách viết route ngắn gọn hơn (khởi tạo tất cả trừ hàm show)
Route::resource('course', \App\Http\Controllers\CourseController::class)->except('show');


