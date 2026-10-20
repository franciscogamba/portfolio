<?php
/**
 * Plugin Name: Portfolio
 * Description: Custom blocks and content tools for Francisco Gamba's portfolio website.
 * Version: 0.1.0
 * Author: Francisco Gamba
 * Requires PHP: 7.4
 * Text Domain: portfolio
 */

defined( 'ABSPATH' ) || exit;

function francisco_portfolio_init() {
    $block_directory = __DIR__ . '/build';

    if ( file_exists( $block_directory . '/block.json' ) ) {
        register_block_type( $block_directory );
    }
}
add_action( 'init', 'francisco_portfolio_init' );
