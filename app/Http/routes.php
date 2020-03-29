<?php

use App\Post;


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return "About Page";
// });

// Route::get('/contact', function () {
//     return "Contact Page";
// });


// Route::get('/post/{id}/{name}', function ($id, $name) {
//     return "This is post number ". $id. " ". $name;
// });

// Route::get('admin/post/example', array('as' => 'admin.home',  function () {
//     $url = route('admin.home');

//     return "This url is     ". $url. " ". $_SERVER['SERVER_NAME'];
// }));

// Route::get('/post/{id}', 'PostsController@index' );

// Route::resource('posts', 'PostsController');

Route::get('/contact', 'PostsController@contact' );

Route::get('post/{id}/{name}/{password}', 'PostsController@show_post' );


/*
|--------------------------------------------------------------------------
| Elequent ORM
|--------------------------------------------------------------------------
*/
// Route::get('/read', function () {
    
//     $posts = Post::all();

    

//     foreach ($posts as $post) {
        
//         echo $post;
        
//     }

// });

// 

// Route::get('/findwhere', function () {
//     $posts = Post::where('id',3)->orderBy('id', 'desc')->take(1)->get();
//     return $posts;
// });

// Route::get('/findmore', function () {
//     $posts = Post::findorfail(10);
//     return $posts;
// });

// Route::get('/basicinsert', function () {
//     $post  = new Post;

//     $post->title = 'New Orm Title';
//     $post->content = 'example';

//     $post->save();


// });

// Route::get('/basicupdate', function () {
//     $post  = Post::find(4);

//     $post->title = 'Orm Title Updates';
//     $post->content = 'example';

//     $post->save();


// });

// Route::get('/create', function () {
//     Post::create(['title'=>'example', 'content'=>'example']);
// });

Route::group(['middleware' => ['web']], function () {
    

});

