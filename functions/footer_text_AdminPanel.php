<?php 

/**
 *
 * Добавляетс произвольную ссылку в подвале админки
 *
 */
function remove_footer_admin () {

echo 'Разработка сайта <a href="https://www.facebook.com/oleg.mes.50" target="_blank">Oleg Meshcheryakov</a>';

}

add_filter('admin_footer_text', 'remove_footer_admin');
?>