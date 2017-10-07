<?php 

/**
 *
 * Модифицирует ссылку more_link на кастомный текст
 *
 */
function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Your Read More Link Text</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );
?>