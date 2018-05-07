<?php get_header(); ?>


<!-- add jumbotron slideshow -->
<div class="row justify-content-between about">
  <div class="col-sm-12 col-md-7">
    this is all about us
  </div>

  <div class="col-sm-12 col-md-4">
    this is how you learn all about us
  </div>
</div>

<div class="row hours">
  <div class="col-sm-12 col-md-5">
      <h2>These are our hours of operation</h2>
  </div>
  <div class="col-sm-12 col-md-6">
      <table class="table">
        <thead>
            <tr>
                <th scope="col">Days of the Week</th>
                <th scope="col">Open</th>
                <th scope="col">Closed</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">Monday - Thursday</td>
                <td><?php echo get_option('open'); ?> am</td>
                <td><?php echo get_option('closed');?> pm</td>
            </tr>
            <tr>
                <td scope="row">Friday</td>
                <td><?php echo get_option('open'); ?> am</td>
                <td><?php echo get_option('friday-closed');?> pm</td>
            </tr>
        </tbody>
      </table>
  </div>
</div>

<div class="row payment">
    learn more about payment here
</div>
<?php get_footer();?>
