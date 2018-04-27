<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>400 North Medical</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/normalize.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <?php wp_head();?>
  </head>

  <body>
    <!-- navigation header-->
    <div class='container'>
    <header>
      <a href="index.html"><img src="#" alt="400 North Medical Center logo"></a>
      <nav>
          <a href="<?php echo get_bloginfo(wpurl); ?>">Home</a>
          <?php wp_list_pages("&title_li=");?>
      </nav>
    </header>
