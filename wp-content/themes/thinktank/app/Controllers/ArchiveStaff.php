<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class ArchiveStaff extends Controller
{

  public function getAdmin() {
    $admins = get_posts([
      'post_type' => 'staff',
      'posts_per_page' => '-1',
      'orderby' => 'menu_order',
      'order' => 'ASC',
      'tax_query' => array(
        array(
          'taxonomy' => 'staff-type',
          'field' => 'slug',
          'terms' => 'administrator',
        )
      )
    ]);

    return array_map(function ($post) {
      return [
        'name' => get_the_title($post->ID),
        'image' => get_the_post_thumbnail_url($post->ID),
        'tags' => get_the_tags($post->ID),
        // 'content' => mb_strimwidth(get_the_content($post->ID), 0, 400, '...'),
        'content'=>wp_trim_words(get_post_field('post_content', $post->ID), 35, '...'),
        'link' => get_permalink($post->ID),
      ];
    }, $admins);
  }

  public function getThera() {
    $thera = get_posts([
      'post_type' => 'staff',
      'posts_per_page' => '-1',
      'orderby' => 'menu_order',
      'order' => 'ASC',
      'tax_query' => array(
        array(
          'taxonomy' => 'staff-type',
          'field' => 'slug',
          'terms' => 'therapist',
        )
      )
    ]);

    return array_map(function ($post) {
      return [
        'name' => get_the_title($post->ID),
        'image' => get_the_post_thumbnail_url($post->ID),
        'tags' => get_the_tags($post->ID),
        // 'content' => mb_strimwidth(get_the_content($post->ID), 0, 400, '...'),
        'content'=>wp_trim_words(get_post_field('post_content', $post->ID), 35, '...'),
        'link' => get_permalink($post->ID),
      ];
    }, $thera);
  }

  public function staffLoop() {
    $services = get_posts([
        'post_type' => 'staff',
        'posts_per_page'=>'-1',
        'order' => 'ASC',
        // 'meta_query' => array(
        //   array(
        //     'key' => 'featured',
        //     'value' => 'featured',
        //   )
        // )
    ]);

    return array_map(function ($post) {
      return [
        'name' => get_the_title($post->ID),
        'image' => get_the_post_thumbnail_url($post->ID),
        'tags' => get_the_tags($post->ID),
        // 'content' => mb_strimwidth(get_the_content($post->ID), 0, 400, '...'),
        'content'=>wp_trim_words(get_post_field('post_content', $post->ID), 35, '...'),
        'link' => get_permalink($post->ID),
      ];
    }, $services);
  }
}
