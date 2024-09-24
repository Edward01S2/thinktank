<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
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

  public function staffLoop() {
    $services = get_posts([
        'post_type' => 'staff',
        'posts_per_page'=>'-1',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'meta_query' => [
          [
            'key' => 'featured',
            'value' => '1'
          ]
        ]
    ]);

    return array_map(function ($post) {
      return [
        'name' => get_the_title($post->ID),
        'image' => get_the_post_thumbnail_url($post->ID),
        'tags' => get_the_tags($post->ID),
        // 'content' => mb_strimwidth(get_the_content($post->ID), 0, 400, '...'),
        'content'=>wp_trim_words(get_post_field('post_content', $post->ID), 30, '...'),
        'link' => get_permalink($post->ID),
      ];
    }, $services);
  }

}
