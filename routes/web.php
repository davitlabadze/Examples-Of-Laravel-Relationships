<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/one-to-many', function () {
    // $post = User::find(1)->posts()->where('title', 'First Post')->first();
    // return $post;

    // If you need to add conditions or perform additional queries on the relationship
    // $posts = User::find(1)->posts()->get();

    $posts = User::find(1)->posts;
    $new_array = [];

    foreach ($posts as $post) {
        array_push($new_array, $post);
    }
    return $new_array;

    // Inverse
    // $post = Post::find(4);

    // return $post->user->name;


});
