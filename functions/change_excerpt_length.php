<?php 

/**
 *
 * Изменяет кол-во символов в кртаком описании поста
 *
 */
function new_excerpt_length($length) {
return 100;
}
add_filter('excerpt_length', 'new_excerpt_length');