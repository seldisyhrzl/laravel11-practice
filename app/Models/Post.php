<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
  public static function all()
  {
    return [
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
  }

  public static function find($slug): array
  {
    $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

    if (!$post) {
      abort(404);
    }

    return $post;
  }
}
