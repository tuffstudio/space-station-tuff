<?php
    function quote_shortcode($atts, $content = null) {
        return '<div class="canvas-post__quote">' . $content . '</div>';
    }

    function intro_shortcode($atts, $content = null) {
        return '<p class="text-intro">' . $content . '</p>';
    }


    function register_shortcodes(){
        add_shortcode('quote', 'quote_shortcode');
        add_shortcode('intro', 'intro_shortcode');
    }

    add_action( 'init', 'register_shortcodes');

    // Register shortcode buttons on TinyMCE plugin
    function register_button( $buttons ) {
       array_push( $buttons, "|", "quotes" );

       return $buttons;
    }

    function add_plugin( $plugin_array ) {
       $plugin_array['quotes'] = get_template_directory_uri() . '/assets/wp-scripts/quotes.js';

       return $plugin_array;
    }

    function init_shortcode_buttons() {
        if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) {
            return;
        }

        if ( get_user_option('rich_editing') == 'true' ) {
            add_filter( 'mce_external_plugins', 'add_plugin' );
            add_filter( 'mce_buttons', 'register_button' );
        }
    }

    add_action('init', 'init_shortcode_buttons');
