<?php

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

Route::get('/', function () {
    return view('home.index',[
        'title' => 'Home'
    ]);
});
Route::get('/contact', function () {
    return view('contact.index',[
        'title' => 'Contact'
    ]);
});
Route::get('/about', function () {
    return view('about.index',[
        'title' => 'About',
        'nama' => 'Uut Budiarto',
        'email' => 'fileku.uut@gmail.com',
        'profesi' => 'Software Developer' 
    ]);
});

Route::get('/blog', function () {
    $blog_post = [
        [
            'title' => 'Judul Post Pertama',
            'author' => 'Uut Budiarto',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, ratione facere. Illum pariatur sapiente recusandae quis vero rerum id dicta, ducimus hic. Corrupti voluptate dolore, rnam distinctio, animi cupiditate voluptatum dolores. Voluptate?',
        ],
        [
            'title' => 'Judul Post Kedua',
            'author' => 'Uut Budiarto',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, ratione facere. Illum pariatur sapiente recusandae quis vero rerum id dicta, ducimus hic. Corrupti voluptate dolore, repellat, aut quos maiores excepturi deserunt ipsam, nobis explicabo optio nemo velit atque quibusdam neque totam non dolores sed? Repellat in nobis sequi saepe? Excepturi deserunt dolor blanditiis doloremque vero, consequatur voluptatibus magnam expedita quae at rem doloribus maxime ea asperiores possimus itaque cum! Aspernatur ad velit natus similique. Repellendus incidunt magni perspiciatis, similique maxime eos sequi, eveniet est recusandae sapiente libero dolorum ipsum aut beatae quos fuga magnam distinctio, animi cupiditate voluptatum dolores. Voluptate?',
        ],
        [
            'title' => 'Judul Post Ketiga',
            'author' => 'Uut Budiarto',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, ratione facere. Illum pariatur sapiente recusandae quis vero rerum id dicta, ducimus hic. Corrupti voluptate dolore, repellat, aut quos maiores excepturi deserunt ipsam, nobis explicabo optio nemo velit atque quibusdam neque totam non dolores sed? Repellat in nobis sequi saepe? Excepturi deserunt dolor blanditiis doloremque vero, consequatur voluptatibus magnam expedita quae at rem doloribus maxime  dolores. Voluptate?',
        ],
    ];
    
    return view('blog.index',[
        'title' => 'Blog',
        'posts' => $blog_post
    ]);
});
