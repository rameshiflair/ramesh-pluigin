<?php 
/**
* Plugin Name: Ramesh Plugin
* Plugin URI: http://yourdomain.com
* Description: Insert a brief description of what your plugin does here.
* Version: 1.0.0
* Author: Your Name
* Author URI: http://yourdomain.com
* License: GPL2
*/
function print_hello_world_title()  {
  echo "<h1>Hello World</h1>"; 
}
function hello_world_admin_menu()  {
  add_menu_page(
    'Hello World',// page title  
    'Hello World Menu Title', // menu title  
    'manage_options',// capability  
    'hello-world',// menu slug  
    'print_hello_world_title'  // callback function  
  );  
}  
add_action( 'admin_menu', 'hello_world_admin_menu' );



?>