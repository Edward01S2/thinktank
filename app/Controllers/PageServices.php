<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageServices extends Controller
{
  protected $acf = true;

  public function serviceLoop() {
    $services = get_posts([
        'post_type' => 'services',
        'posts_per_page'=>'3',
        'order'=>'ASC',
    ]);

    return array_map(function ($post) {
        return [
            'title' => get_the_title($post->ID),
            'image' => get_field("image", $post->ID),
            'specialties' => get_field("specialties", $post->ID),
        ];
    }, $services);
  }
}
