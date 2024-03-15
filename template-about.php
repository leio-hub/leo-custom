<?php
/* Template Name: About*/
$burger         = get_field('menu_pic');
$close_burger   = get_field('close_menu_pic');
$menu           = $burger['sizes']['cstm_size'];
$close          = $close_burger['sizes']['cstm_size'];
?>

<?php get_header(); ?>

<section class="grey" style="position:relative; z-index:2;">
        <div class="container">
                <div>

                </div>
                <div class="contacttext">

                        <ol style="display:flex;flex-direction: column; position: relative; ">
                                <?php


                                $user_id = 5;

                                $homePageEvents = new WP_Query(array(
                                        'posts_per_page' => 3,
                                        'post_type' => 'my-custom-post-type',
                                        'order' => 'ASC',
                                        'author__in' => $user_id
                                ));

                                while ($homePageEvents->have_posts()) {
                                        $homePageEvents->the_post(); ?>

                                        <li><?php the_title(); ?></li>

                                <?php }
                                ?>
                        </ol>
                </div>
        </div>
</section>

<?php get_footer(); ?>