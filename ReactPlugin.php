<?php
/**
* Plugin.
* @package reactplug
* @wordpress-plugin
* Plugin Name:     React Plugin Basic Config
* Description:     Create a React plugin called by a Wordpress Shortcode
* Author:          Jose Fernando Álvarez Romero
* Author URL:      https://joseferalvarez.github.io/josefernandoalvarez/
* Version:         0.0.1
*/

function displayShortcode($params) {
    ob_start();
    ?>
    <div id='react-app' data-route='<?= $params['route'] ?>' />
    <?php return ob_get_clean();
}

function enq_react(){
    wp_enqueue_script('display-react', plugin_dir_url(__FILE__) . '/build/index.js');
    wp_enqueue_style('style-react', plugin_dir_url(__FILE__) . '/build/index.css');
}

add_action('init', function(){add_shortcode('displayDonations', 'displayDonations');});
add_action('wp_enqueue_scripts', 'enq_react');
?>