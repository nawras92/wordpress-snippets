// This snippet to be added in functions.php
/*
  Hide adminbar for Wordpress Members
  Except admin
*/
add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}
