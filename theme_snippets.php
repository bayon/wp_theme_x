<?php
//functions.php
function sp_theme_setup(){
  add_theme_support('menus');
  register_nav_menu('primary','Primary Header Navigation');
}
add_action('after_setup_theme','sp_theme_setup');
// OR USE INIT
add_action('init','sp_theme_setup');
//then you save a menu in the UI and 'Manage Locations' and Menu Settings'
/////////////////////////////////////////////////

 ?>
 <!-- header.php HEADER   -->
 <!doctype html>
 <head>
    <meta charset="utf-8">
    <title>SP Theme</title>
    <?php wp_head(); ?>
  </head>
  <?php
  if(is_fron_page()):
    $sp_body_classes = array('on-class','my-class');
  else:
    $sp_body_classes = array('off-class');
  endif:
   ?>
  <body <?php body_class($sp_body_classes); ?> >
    <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
<!--                               -->
<!-- footer.php FOOTER -->
<footer>
  <p>this is footer</p>
</footer>
<?php wp_footer(); ?>
</body>
<html>
<!-- end -->


<!-- templates named like... -->
<!--
page-notitle.php
then inside that file have this comment
/*
Template name: Page No Title
*/
In the UI when creating a page....
under Page Attributes select the template from drop down.
also you can name templates by their id...

-->

<?php ]
add_theme_support('custom-background'); // gives you the option in UI
add_theme_support('custom-header');
/* then inside the header.php file you call it like this...*/
 ?>
 <!-- like this ... -->
 <img src="<?php header_image(); ?>" height="<?php get_custom_header()->height;" width="<?php get_cutom_header()->width;" alt="" />
 
