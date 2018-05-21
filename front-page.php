<?php get_header(); ?>


<div class="row jumbotron">
</div>

<div class="row justify-content-between about">
  <div class="col-sm-12 col-md-7" id="about-blurb">
    Friendly, helpful environment! The doctors are great!
  </div>

  <div class="col-sm-12 col-md-4">
    <h1 class="desc" id="about-desc">Learn About Us!</h1>
  </div>
</div>

<div class="row hours">
  <div class="col-sm-12 col-md-5" id="desc-parent">
      <h1 class="desc" id="hours-desc">Hours of Operation</h1>
  </div>
  <div class="col-sm-12 col-md-7" id="table">
      <table class="table table-bordered table-sm">
        <thead class="thead-light">
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
      <div id="holidays">
          <h4>Holidays</h4>
          <p>The office is closed on the following days: <?php echo get_option('holidays'); ?></p>
      </div>
    </div>
</div>

<div class="row payment">
    <h1>learn more about payment here</h1>
</div>
<?php get_footer();?>
