<?php

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
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Jullpedd",
        "email" => "juliofaridh00@gmail.com",
        "image" => "ppsadboy.jpeg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "mr x",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque quisquam illo totam error unde eveniet cupiditate minus suscipit. Cupiditate nulla esse fugit alias illo. Quas suscipit, cumque nulla et ipsum blanditiis voluptatem odit! Voluptas nisi harum, voluptatem asperiores blanditiis dolorum, incidunt soluta est neque esse totam! Natus dolore reiciendis quibusdam, aliquid debitis, velit molestiae ad, autem dicta laborum mollitia? Iste."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "mr c",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque quisquam illo totam error unde eveniet cupiditate minus suscipit. Cupiditate nulla esse fugit alias illo. Quas suscipit, cumque nulla et ipsum blanditiis voluptatem odit! Voluptas nisi harum, voluptatem asperiores blanditiis dolorum, incidunt soluta est neque esse totam! Natus dolore reiciendis quibusdam, aliquid debitis, velit molestiae ad, autem dicta laborum mollitia? Iste."
        ],
        ];
         
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug) {

$blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "gapapa ko",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque quisquam illo totam error unde eveniet cupiditate minus suscipit. Cupiditate nulla esse fugit alias illo. Quas suscipit, cumque nulla et ipsum blanditiis voluptatem odit! Voluptas nisi harum, voluptatem asperiores blanditiis dolorum, incidunt soluta est neque esse totam! Natus dolore reiciendis quibusdam, aliquid debitis, velit molestiae ad, autem dicta laborum mollitia? Iste."
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "jeje",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque quisquam illo totam error unde eveniet cupiditate minus suscipit. Cupiditate nulla esse fugit alias illo. Quas suscipit, cumque nulla et ipsum blanditiis voluptatem odit! Voluptas nisi harum, voluptatem asperiores blanditiis dolorum, incidunt soluta est neque esse totam! Natus dolore reiciendis quibusdam, aliquid debitis, velit molestiae ad, autem dicta laborum mollitia? Iste."
    ],
    ];

$new_post = [];
foreach($blog_posts as $post) {
    if($post["slug"] === $slug) {
        $new_post = $post;
    }
}    


return view('post', [
    "title" => "Single Post",
    "post" => $new_post
]);
});