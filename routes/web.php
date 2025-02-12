<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'HomePage']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Seldi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam reprehenderit ratione quam obcaecati corporis omnis placeat sapiente facilis eaque quo dolorum a laboriosam architecto illo, dolorem eum vero repudiandae voluptates.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Rizal',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam reprehenderit ratione quam obcaecati corporis omnis placeat sapiente facilis eaque quo dolorum a laboriosam architecto illo, dolorem eum vero repudiandae voluptates.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Seldi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam reprehenderit ratione quam obcaecati corporis omnis placeat sapiente facilis eaque quo dolorum a laboriosam architecto illo, dolorem eum vero repudiandae voluptates.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Rizal',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam reprehenderit ratione quam obcaecati corporis omnis placeat sapiente facilis eaque quo dolorum a laboriosam architecto illo, dolorem eum vero repudiandae voluptates.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['name' => 'John Doe', 'title' => 'About Us']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
