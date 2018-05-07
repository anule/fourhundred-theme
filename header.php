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
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button> -->


        <a href="<?php echo get_bloginfo(wpurl); ?>">Home</a>
        <?php wp_list_pages("&title_li=");?>

    </nav>
    </header>
