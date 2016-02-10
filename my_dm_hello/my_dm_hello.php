<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/*
Plugin Name: Hello world
Plugin URI: http://www.yourpluginurlhere.com/
Version: 0.1
Author: Me
Description: Saying hello
*/

$my_pl_config_set = array();

function add_my_custom_menu () {
    add_menu_page (
        'Hello World Config',
        'HWorld Config',
        'manage_options',
        'my_dm_hello/views/form.php'
    );
    add_action('admin_init', 'register_my_cool_plugin_settings');
}

function register_my_cool_plugin_settings() {
    register_setting('my-cool-plugin-settings-group', 'username');
}

function my_hello_world() {
    if(get_option('username')){
        $string = "<p id='m_hw'>Hello ".get_option('username')."</p>";
    } else {
        $string = "<p id='m_hw'>Hello World</p>";
    }
    echo $string;
}

function my_h_css() {
    $x = is_rtl() ? 'left' : 'right';

    echo "
	<style type='text/css'>
        #m_hw {
            float: $x;
            padding-$x: 15px;
            padding-top: 5px;
            margin: 0;
            font-size: 11px;
        }
	</style>
	";
}

add_action( 'admin_menu', 'add_my_custom_menu' );
add_action('admin_notices', 'my_hello_world');
?>