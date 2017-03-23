<?php

use App\Post;
use App\tag;
use App\Video;
use Carbon\Carbon;

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


//Route::get('/create',function(){
//    $post=Post::create(['name'=>'My first Post']);
//    $tag1 = Tag::find(1);
//    $post->tags()->save($tag1);
//
//    $video=Video::create(['name'=>'Video.mov']);
//    $tag2=Tag::find(2);
//    $video->tags()->save($tag2);
//
//
//});
//
//
//Route::get('/read',function(){
//    $post=Post::findOrFail(1);
//    foreach($post->tags as $tag){
//        echo $tag;
//    }
//});
//
//
//Route::get('/update',function(){
//    $post=Post::findOrFail(1);
////    foreach($post->tags as $tag){
////        return $tag->whereName('PHP')->update(['name'=>'PHP 7']);
////    }
////    $post=Post::findOrFail(1);
// //   $tag = Tag::find(3);
//    //$post->tags()->save($tag);
//    //$post->tags()->attach($tag);
//    $post->tags()->sync([1,2]);
//
//});
//
//Route::get('/delete',function(){
//    $post=Post::find(2);
//    foreach ($post->tags as $tag) {
//        $tag->whereId(3)->delete();
//    }
//});


// Crude Application

Route::resource('/posts','PostController');

Route::get('/dates',function(){
    $date= new DateTime('+1 week');
    echo $date->format('m-d-Y');
    echo '<br>';
    echo Carbon::now()->addDay(10)->diffForHumans();

    echo '<br>';
    echo Carbon::now()->subMonth(5)->diffForHumans();
    echo '<br>';
    echo Carbon::now()->yesterday()->diffForHumans();

    echo '<br>';
    echo Carbon::now()->yesterday();
    echo '<br>';
});


Route::get('/getname',function(){
    $user= User::find(1);
    echo $user->name;
});










