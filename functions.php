<?php
// add scripts and stylesheets
function fourhundred_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.1.1' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.1.1', true );
}
add_action('wp_enqueue_scripts', 'fourhundred_scripts');

// *** Hours of Operation settings ***
// Create section in admin sidebar
function hours_operation_add_menu() {
    add_menu_page('Hours of Operation', 'Operating Hours', 'manage_options', 'hours-operation_page', 'hours_operation_page');
}
add_action('admin_menu', 'hours_operation_add_menu');

// create page to display fields
function hours_operation_page() {?>
        <div class="hours">
          <h1>Hours of Operation</h1>
          <form method="POST" action="options.php">
            <?php
              settings_fields( 'section' );
              do_settings_sections( 'hours-operations' );
              submit_button();
            ?>
          </form>
  </div>
<?php }

// display fields on page
function hours_operation_page_setup() {
    add_settings_section('section', 'Operating Hours', null, 'hours-operations');
    add_settings_field('open', 'Opening Hours', 'open_setting', 'hours-operations', 'section');
    add_settings_field('closed', 'Closing Hours', 'closed_setting', 'hours-operations', 'section');

    register_setting('section', 'open');
    register_setting('section', 'closed');
}
add_action('admin_init', 'hours_operation_page_setup');

// "Open" input field
function open_setting() { ?>
    <input type="number" name="open" id="open" value="<?php echo get_option('open'); ?>">
<?php }


// "Closed" fields
function closed_setting() { ?>
    <input type="number" name="closed" id="closed" value="<?php echo get_option('closed'); ?>">
<?php }

?>
