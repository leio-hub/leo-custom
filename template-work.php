
<?php 
/* Template Name: Work */

get_header(); 
$right_menu_locations = get_nav_menu_locations();
$right_menu_id = $right_menu_locations['right-menu'];
$right_menu_items = wp_get_nav_menu_items($right_menu_id);
?>
<div class="transition">
    <div id="menuTitleDisplay" class="menu-name-text"></div>
</div>
<section class="bgcolor">
<div class="container">
<div class="contacttext">
        <h1><?php the_title();?></h1>

        This is the Contact page
</div>
</div>

</section>
      
<?php get_footer(); ?>