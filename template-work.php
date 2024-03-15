<?php
/* Template Name: Work */

?>

<?php get_header();

$burger         = get_field('menu_pic');
$close_burger   = get_field('close_menu_pic');
$menu           = $burger['sizes']['cstm_size'];
$close          = $close_burger['sizes']['cstm_size'];
$atropos_image  = get_field('atropos');
$atropos_pic    = $atropos_image['sizes']['cstm_size'];
$post = get_post('my-custom-post-type');


?>
<div>

</div>



<div class="bgcolorwork">

    <div class="contacttext">
        <h1 style="color: white;">HERE ARE SOME OF MY WORKS</h1>

        <?php if (have_rows('work_contents')) : ?>
            <?php while (have_rows('work_contents')) : the_row(); ?>
                <div class="atropos my-atropos ">
                    <div class="atropos-scale">
                        <div class="atropos-rotate">
                            <div class="atropos-inner">
                                <div class="image-bg" data-atropos-offset=0>
                                    <img src="<?php echo $atropos_pic; ?>" style="z-index:100; display:block;">
                                    <div class="capstone_video">
                                        <video id="capstone_vid" width="180" height="320" plays-inline autoplay loop muted>
                                            <source src="<?php $capstone_vid = get_sub_field('capstone_vid');
                                                            echo $capstone_vid; ?>" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="background-overlay"></div>
                                    <div class="hover-content">
                                        <!-- <h2>TECH USED</h2> -->
                                        <?php if (have_rows('tech_icons_pic')) : ?>
                                            <?php while (have_rows('tech_icons_pic')) : the_row(); ?>
                                                <?php
                                                $tech_pics = get_sub_field('tech_icons');
                                                ?>

                                                <img src="<?php echo $tech_pics['url']; ?>" alt="" class="tech_icons">
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <?php get_footer(); ?>