<?php 

/**
 *
 * Автоматический, динамический title
 *
 */
function dynamictitles() {
$longd = __('Enter your longdescription here.', 'texdomainstring');
    if ( is_single() ) {
      wp_title('');
      echo ' | '.get_bloginfo('name');

} else if ( is_page() || is_paged() ) {
      bloginfo('name');
      wp_title('|');

} else if ( is_author() ) {
      bloginfo('name');
      wp_title(' | '.__('Author', 'texdomainstring'));

} else if ( is_category() ) {
      bloginfo('name');
      wp_title(' | '.__('Archive for', 'texdomainstring'));

} else if ( is_tag() ) {
      echo get_bloginfo('name').' | '.__('Tag archive for', 'texdomainstring');
      wp_title('');

} else if ( is_archive() ) {
      echo get_bloginfo('name').' | '.__('Archive for', 'texdomainstring');
      wp_title('');

} else if ( is_search() ) {
      echo get_bloginfo('name').' | '.__('Search Results', 'texdomainstring');
} else if ( is_404() ) {
      echo get_bloginfo('name').' | '.__('404 Error (Page Not Found)', 'texdomainstring');

} else if ( is_home() ) {
      echo get_bloginfo('name').' | '.get_bloginfo('description');

} else {
      echo get_bloginfo('name').' | '.($blog_longd);
}
}
?>