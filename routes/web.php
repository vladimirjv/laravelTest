<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', "PaginasController@inicio");

Route::get('/cualquiera', function() {
    return "pagina cualquiera";
});

// Route::get('/posts/{id}', function ($id) {
//     return "Aqui está el post n° " . $id;
// });
// Route::get('/posts/{id}/{nombre}', function ($id,$nombre) {
//     return "Aqui está el post n° " . $id;
// })->where('nombre','[a-zA-Z]+');
Route::resource('posts', 'PostsController');

Route::get('/inicio', 'DemoController@inicio');
