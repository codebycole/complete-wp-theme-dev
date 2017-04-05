<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- see for best practices https://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29 -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <!-- Latest Bootstrap compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
  </head>
  <body>
    <!--
    This is how you show the posts from the database.
    It is called the WordPress loop.
    https://codex.wordpress.org/The_Loop
    -->

    <!-- This is the opening if statement.
    PHP will check to see if have_posts() is true or not.
    If it is true, then anything insnde the if statement will be run by PHP.
    The have_posts() function checks to see if there any posts in the database.
    https://codex.wordpress.org/Function_Reference/have_posts
    -->
    <?php if ( have_posts() ) : ?>

      <?php while ( have_posts() ) : the_post(); ?>

          <p>This is the content of a hard-coded paragraph.</p>
          <h1><?php the_title(); ?></h1>
          <!-- https://codex.wordpress.org/Function_Reference/the_title -->
          <p><?php the_content(); ?></p>
          <!-- https://developer.wordpress.org/reference/functions/the_content/ -->

      <?php endwhile; ?>

    <?php endif; ?>
    <!--The wp_footer() function adds the admin bar to the site.
    https://developer.wordpress.org/reference/functions/wp_footer/ -->
    <?php wp_footer(); ?>
  </body>
</html>
