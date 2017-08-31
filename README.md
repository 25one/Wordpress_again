ajax-shortcode для Wordpress – добавляет на страницу кнопку, при нажатии на которую на кроне запускается функция, которая работает 20 сек. в фоновом режиме, после чего пользователю в браузер приходит сообщение

1.function.php :
…
function button_add() {
wp_register_script( 'twenty-seconds.js', get_template_directory_uri().'/js/twenty-seconds.js');
wp_enqueue_script( 'twenty-seconds.js' );
$jquery_send_patch=str_replace('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], '', get_template_directory_uri());
return '<button type="button" name="'.$jquery_send_patch.'" id="twenty_seconds">Twenty seconds</button>';
}
add_shortcode('button_cron', 'button_add');

+на страницу в нужное место  [button_cron]

2.тема/js/twenty-seconds.js :
jQuery(document).ready(function() {
jQuery("body").on("click", "#twenty_seconds", function() {cron.twentyseconds(this.getAttribute("name"));});
});
var cron={
   twentyseconds: function(patch_name) {
      var ajaxSettings = {
          method: "GET",
          data: "twentyseconts",
          url: patch_name+"/twentyseconds.php",
          success: function(data) {
              alert(data);
          }
      };
      jQuery.ajax(ajaxSettings);
   },
}

3.фоновый php-скрипт - тема/twentyseconds.php :
<?php
if(isset($_GET['twentyseconts'])) {
sleep(20);
echo "Hello... It's been twenty seconds!";
}
?>
