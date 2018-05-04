<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); echo get_bloginfo('name'); ?></title>

    <?php wp_head();?>
  </head>

  <body>
    <div class='container'>
    <header>
      <nav class="navbar d-print">
      <a class="navbar-brand" href="<?php echo get_bloginfo(wpurl); ?>">400 North Medical Center</a>
          <a href="<?php echo get_bloginfo(wpurl); ?>">Home</a>
          <?php wp_list_pages("&title_li=");?>
      </nav>
    </header>
