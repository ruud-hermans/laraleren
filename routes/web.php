<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


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



app()->bind('example', function(){
   return new \App\Models\Example();

});


Route::get('/', function () {
    $example = resolve('example');

    ddd('$example');


});



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about', function () {
    return view('about', [
        'articles' => $articles = App\Models\Article::take(3)->latest()->get()
    ]);
});

Route::get('articles', [ArticleController::class, 'index']);
Route::post('articles', [ArticleController::class, 'store']);
Route::get('articles/create', [ArticleController::class, 'create']);
Route::get('articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('articles/{article}/edit', [ArticleController::class, 'edit']);
Route::put('articles/{article}', [ArticleController::class, 'update']);