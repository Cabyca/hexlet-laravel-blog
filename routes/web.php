<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

// Строковый синтаксис - КОГДА КОНТРОЛЛЕ НЕ НАЙДЕН:  https://laravel.demiart.ru/
//Route::get('/home', 'HomeController@show');
// Action-синтаксис (не забудьте импортировать класс контроллера)
//use App\Http\Controllers\HomeController;
//Route::get('/home', [ HomeController::class, 'show' ]);


Route::get('/', function () {
    return view('welcome');
});

Route::get('about', [PageController::Class, 'about']);

// Название сущности в URL во множественном числе, контроллер в единственном
Route::get('articles', [ArticleController::class, 'index'])
  ->name('articles.index'); // имя маршрута, нужно для того, чтобы не создавать ссылки руками
