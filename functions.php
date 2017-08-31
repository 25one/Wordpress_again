<?php
//...

function button_add() {
wp_register_script( 'twenty-seconds.js', get_template_directory_uri().'/js/twenty-seconds.js');
wp_enqueue_script( 'twenty-seconds.js' );
$jquery_send_patch=str_replace('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], '', get_template_directory_uri());
return '<button type="button" name="'.$jquery_send_patch.'" id="twenty_seconds">Twenty seconds</button>';
}
add_shortcode('button_cron', 'button_add');

