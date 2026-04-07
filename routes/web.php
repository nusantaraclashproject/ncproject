<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('home');
});

Route::get('/merch', function () {
    return view('merch');
});

Route::get('/game', function () {
    return view('game');
});

Route::get('/about', function () {
    return view('about');
});

// Comment routes
Route::post('/api/comments', [CommentController::class, 'store']);
Route::get('/api/comments', [CommentController::class, 'index']);
