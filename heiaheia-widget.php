<?php

/**
 * Plugin Name: HeiaHeia Widget
 * Plugin URI: https://heiaheia.com
 * Description: A widget that brings a piece of HeiaHeia to your own blog
 * Version: 1.0
 * Author: H2 Wellbeing Ltd.
 * Author URI: https://heiaheia.com
 * License: GPL2
 */

class Heiaheia_Widget extends WP_Widget {

  public function __construct() {
    parent::__construct(
      'heiaheia-widget',
      'HeiaHeia Widget'
    );
  }

  function form($instance) {
    $blog_lang = trim(substr(get_bloginfo('language'), 0, 2));

    $defaults = array(
      'title' => '',
      'lang' => $blog_lang ? $blog_lang : 'en',
      'width' => '100%',
      'height' => '370px'
    );

    $instance = wp_parse_args(
      $instance, $defaults
    );

    extract($instance, EXTR_SKIP);


    include plugin_dir_path(__FILE__) . 'views/admin.php';
  }

  function update($new_instance, $instance) {
    $instance['title']        = strip_tags($new_instance['title']);
    $instance['object_id']    = strip_tags($new_instance['object_id']);
    $instance['content_type'] = strip_tags($new_instance['content_type']);
    $instance['width']        = strip_tags($new_instance['width']);
    $instance['height']       = strip_tags($new_instance['height']);
    $instance['lang']         = strip_tags($new_instance['lang']);
    $instance['units']        = strip_tags($new_instance['units']);

    return $instance;
  }

  function widget($args, $instance) {
    extract($instance, EXTR_SKIP);

    $title = apply_filters('widget_title', $instance['title']);

    if($title)
      $before_title . $title . $after_title;

    $object_real_id = substr($instance['object_id'], 1, strlen($instance['object_id']));
    $iframe_url_path = '/plugin/';
    if($instance['object_id'][0] == 'u')
      $iframe_url_path .= 'personals/' . $object_real_id;
    else if($instance['object_id'][0] == 'g')
      $iframe_url_path .= 'groups/' . $object_real_id;
    else if($instance['object_id'][0] == 'o')
      $iframe_url_path .= 'corporates/' . $object_real_id;

    $iframe_url_params = http_build_query(array(
      'content_type'       => ($instance['content_type'] == 'top_5_sports' ? 1 : 2),
      'locale'             => $instance['lang'],
      'measurement_system' => ($instance['units'] == 'metric' ? 1 : 2)
    ));

    $iframe_url = 'https://www.heiaheia.com/' . $iframe_url_path . '?' . $iframe_url_params;

    echo $before_widget;

    include plugin_dir_path(__FILE__) . 'views/widget.php';

    echo $after_widget;
  }
}

add_action('widgets_init', create_function('', 'return register_widget("Heiaheia_Widget");'));
