<?php

// Create a new function to tell WP what you want it to do.
function enqueue_customtheme_styles(){
  // First, enqueue Bootstrap, so its styles are applied before any others.
  wp_enqueue_style("bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
  // Second, enqueue the styles.css file for the site.
  wp_enqueue_style("customtheme-style", get_stylesheet_uri());
}
// We are adding an action to a hook with this.
// This tells WP to run the function that was created above.
// This lets you jump in during the chain of events (hooks) that are firing,
// and put your custom code in at a certain place/time.
add_action("wp_enqueue_scripts", "enqueue_customtheme_styles");
?>
