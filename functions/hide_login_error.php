<?php 

/**
 *
 * Удаляет сообщение о не правильно логине при входе
 *
 */
function no_wordpress_errors(){
  return 'Something is wrong!';
}
add_filter( 'login_errors', 'no_wordpress_errors' );