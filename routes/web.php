<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;

/*
（コメント部分は省略）
*/

Route::get('/', [MessagesController::class, 'index']);
Route::resource('messages', MessagesController::class);