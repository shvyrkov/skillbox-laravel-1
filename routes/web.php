<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PostController;
use App\Myhelpers\Menu;
use Illuminate\Support\Facades\Route;

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

$menu = Menu::getUserMenu();

Route::get('/', [ArticlesController::class, 'index']);
Route::post('/', [ArticlesController::class, 'store']);
Route::get('/articles/{article}', [ArticlesController::class, 'show']);
Route::get('/article/create', [ArticlesController::class, 'create']);

Route::get('/about', function () use ($menu) {
    return view('about', ['title' => Menu::showTitle($menu), 'menu' => $menu]);
});

Route::get('/contacts', [PostController::class, 'create']);
Route::get('/admin/feedback', [PostController::class, 'index']);
Route::post('/admin', [PostController::class, 'store']);
