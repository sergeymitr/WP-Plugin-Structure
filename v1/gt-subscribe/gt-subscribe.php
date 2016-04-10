<?php

/*
 * Plugin Name: GT Subscribe
 * Description: Namespaces usage example for WordPress
 * Version: 1
 * Author: Sergey Mitroshin
 */

namespace GT\Subscribe;

use GT\Subscribe\Models;

include 'models/display.php';
include 'models/subscribe.php';
include 'models/delivery.php';

add_filter( 'the_content', [ 'GT\Subscribe\Models\Display', 'form' ] );

add_action( 'init', function() {
	if ( ! empty( $_POST['gt_subscribe_email'] ) ) {
		Models\Subscribe::handle( $_POST['gt_subscribe_email'] );
	}
} );

add_action( 'publish_post', function( $ID, $post ) {
	Models\Delivery::run( $post->post_title, $post->post_content );
} );
