<?php

use Illuminate\Support\Facades\Route;

// für: Route::get('/infos');
use App\Http\Controllers\InfosController;

use App\Models\Song;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beispiel', function(){
    return '<h1>Beispiel</h1>';         // http://localhost:8000/beispiel
});

Route::get('/dawid', function(){
    'return <h1>Hello Dawid</h1>';      // http://localhost:8000/dawid
}); 

Route::get('user/{name}', function($name){
    return '<h1>Hello '.$name.'</h1>';      // http://localhost:8000/user/der Name z.B. Jackson
});

Route::get('/data', function(){          //localhost:8000/data
    return array(
        'Name' => 'Christian',
        'Nachname' => ' in Glück'
    );
});

Route::get('/rooms', function(){
    $id=request('id');
    return "<h1>Raum Nr. $id</h1>";         //localhost:8000/rooms , localhost:8000/rooms?id=3
});

// Route mit ein anderer Datei verbinden, in dem Fall mit views/users.php
Route::get('/users', function(){
    return view('users');                   //localhost:8000/users
});


// view/posts.blade.php
Route::get('/posts', function(){
    $page = request('page');
    $user = request('user');
    return view('posts',[
        'page'=>$page,
        'user'=>$user
    ]);
});

// Route mit class aus infosController.php verbinden
Route::get('/infos',[InfosController::class,'show']);       //localhost:8000/infos

// views/test.php
Route::get('/test', function(){
    return view('test');
});


// comment.blade.php
Route::get('/kommentar', function(){
    $comment = 'Hier ist alles <strong>super</strong>';
    return view('comment',[
        'kommentar'=>$comment,
        'songs'=>3,                 //mehrere Songs weil 3
        'loggedin'=>false
    ]);
});

/* Master/Child Templates (layout.blade.php , child.blade.php) */
Route::get('/child', function(){
    return view('child');
});

Route::get('/child2', function(){
    return view('child2');
});


/* KOMPONENTEN */
/* 1. klassische Variante */
Route::get('/portfolio', function(){
    return view('portfolio');
});

/* 2. neue Variante seit Laravel 7 */
/* views/components-Ordner */
Route::get('/service', function(){
    return view('service');
});

/* Query Builder */
Route::get('/users', function(){
    $user=DB::table('users')->get();
    return $user;
});

/* Neuen Song anlegen */
Route::get('songs', function(){
    $song=new Song;
    $song->title='Love is real';
    $song->band='John Maus';
    $song->save();
    return Song::all();
});